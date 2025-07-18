<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Earning;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Return blade functions
    public function index()
    {
        $orders = Order::with('items.product')->where('user_id', Auth::id())->latest()->get();
        return view('orders.index', compact('orders'));
    }

    public function showCartOrderForm()
    {
        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();
        if ($cartItems->isEmpty()) return redirect()->back()->with('error', 'Your cart is empty.');

        $total = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);

        return view('orders.confirm_cart', compact('cartItems', 'total'));
    }

    public function showSingleOrderForm(Product $product)
    {
        return view('orders.confirm_single', compact('product'));
    }

    // Process Data and Save to Database Functions

    public function buyNowSingle(Request $request, Product $product)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $quantity = $request->input('quantity');

        if ($product->quantity < $quantity) {
            return back()->with('error', 'Not enough stock available.');
        }

        DB::transaction(function () use ($product, $quantity) {
            // Create the order
            $order = Order::create([
                'user_id' => Auth::id(),
                'total_price' => $product->price * $quantity,
                'status' => 'pending',
            ]);

            // Create the order item
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => $quantity,
                'price_at_purchase' => $product->price,
            ]);

            // Create earning entry
            Earning::create([
                'order_id' => $order->id,
                'amount' => $product->price * $quantity,
            ]);

            // Deduct inventory
            $product->decrement('quantity', $quantity);
        });

        return redirect()->route('orders.index')->with('success', 'Order placed. Awaiting payment.');
    }

    public function buyNowCart()
    {

        $userId = Auth::id();

        $cartItems = Cart::with('product')->where('user_id', $userId)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        // Calculate total price
        $totalPrice = 0;
        foreach ($cartItems as $item) {
            if ($item->product->quantity < $item->quantity) {
                return redirect()->back()->with('error', "Not enough stock for {$item->product->name}.");
            }
            $totalPrice += $item->product->price * $item->quantity;
        }

        DB::transaction(function () use ($userId, $cartItems, $totalPrice) {
            // Create the order
            $order = Order::create([
                'user_id' => $userId,
                'total_price' => $totalPrice,
                'status' => 'pending',
            ]);

            // Create earning entry
            Earning::create([
                'order_id' => $order->id,
                'amount' => $totalPrice,
            ]);

            foreach ($cartItems as $item) {
                // Create order items
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product->id,
                    'quantity' => $item->quantity,
                    'price_at_purchase' => $item->product->price,
                ]);

                // Deduct stock
                $item->product->decrement('quantity', $item->quantity);
            }

            // Clear cart
            Cart::where('user_id', $userId)->delete();
        });

        return redirect()->route('orders.index')->with('success', 'Order placed from cart. Awaiting payment.');
    }
}
