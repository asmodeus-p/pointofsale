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
        $user = Auth::user();

        $orders = $user->role === 'admin'
            ? Order::with('items.product', 'user')->latest()->get()
            : Order::with('items.product')->where('user_id', $user->id)->latest()->get();

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

        $validItems = $cartItems->filter(function ($item) {
            return $item->product->quantity >= $item->quantity;
        });

        if ($validItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'All items in your cart are out of stock.');
        }

        try {
            DB::transaction(function () use ($userId, $validItems) {
                $totalPrice = 0;

                foreach ($validItems as $item) {
                    $product = Product::lockForUpdate()->find($item->product->id);
                    $totalPrice += $product->price * $item->quantity;
                }

                $order = Order::create([
                    'user_id' => $userId,
                    'total_price' => $totalPrice,
                    'status' => 'pending',
                ]);

                Earning::create([
                    'order_id' => $order->id,
                    'amount' => $totalPrice,
                ]);

                foreach ($validItems as $item) {
                    $product = Product::lockForUpdate()->find($item->product->id);

                    OrderItem::create([
                        'order_id' => $order->id,
                        'product_id' => $product->id,
                        'quantity' => $item->quantity,
                        'price_at_purchase' => $product->price,
                    ]);

                    $product->decrement('quantity', $item->quantity);

                    $item->delete();
                }
            });

            return redirect()->route('orders.index')->with('success', 'Order placed. Out-of-stock items were skipped and remain in your cart.');
        } catch (\Exception $e) {
            return redirect()->route('cart.index')->with('error', 'Something went wrong while placing the order.');
        }
    }

    public function markAsPaid(Order $order)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }

        $order->status = 'paid';
        $order->save();

        return back()->with('success', 'Order marked as paid.');
    }
}
