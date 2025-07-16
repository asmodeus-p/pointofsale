<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('items.product')->where('user_id', auth()->id())->latest()->get();
        return view('orders.index', compact('orders'));
    }


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
                'user_id' => auth()->id(),
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

            // Deduct inventory
            $product->decrement('quantity', $quantity);
        });

        return redirect()->route('orders.index')->with('success', 'Order placed. Awaiting payment.');
    }
}
