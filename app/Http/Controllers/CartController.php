<?php


namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;


class CartController extends Controller
{

    public function index()
    {
        $cartItems = Cart::with('product')->latest()->paginate(10);
        return view('cart', compact('cartItems'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity'   => 'required|integer|min:1',
        ]);

        // Optional: Check if product is already in the cart
        $existing = Cart::where('product_id', $validated['product_id'])->first();

        if ($existing) {
            // If it already exists, just update the quantity
            $existing->quantity += $validated['quantity'];
            $existing->save();
        } else {
            // Otherwise, create new cart record
            Cart::create([
                'product_id' => $validated['product_id'],
                'quantity'   => $validated['quantity'],
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('cart.index')->with('success', 'Item remove from cart!');
    }

}
