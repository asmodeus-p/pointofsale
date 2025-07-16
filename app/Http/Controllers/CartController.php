<?php


namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{

    public function index()
    {
        $userId = Auth::id();

        $cartItems = Cart::where('user_id', $userId)
                        ->with('product') // eager load the product
                        ->get();

        return view('cart', compact('cartItems'));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'product_id' => 'required|exists:products,id',
        'quantity'   => 'required|integer|min:1',
    ]);

    $userId = Auth::id();
    $product = Product::findOrFail($validated['product_id']);
    $quantityToAdd = $validated['quantity'];

    $existing = Cart::where('user_id', $userId)
                    ->where('product_id', $product->id)
                    ->first();

    $alreadyInCart = $existing ? $existing->quantity : 0;

    if ($alreadyInCart + $quantityToAdd > $product->quantity) {
        return back()->withErrors([
            'quantity' => 'Only ' . ($product->quantity - $alreadyInCart) . ' left in stock. You already have ' . $alreadyInCart . ' in your cart.'
        ]);
    }

    if ($existing) {
        $existing->quantity += $quantityToAdd;
        $existing->save();
    } else {
        Cart::create([
            'user_id'    => $userId,
            'product_id' => $product->id,
            'quantity'   => $quantityToAdd,
        ]);
    }

    return redirect()->route('cart.index')->with('success', 'Product added to cart!');
}

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('cart.index')->with('success', 'Item remove from cart!');
    }

    public function update(Request $request, $id)
    {
        $cartItem = Cart::where('id', $id)
                        ->where('user_id', Auth::id())
                        ->firstOrFail();

        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        if ($request->quantity > $cartItem->product->quantity) {
            return response()->json(['message' => 'Exceeds stock'], 400);
        }

        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return response()->json(['quantity' => $cartItem->quantity]);
    }





}
