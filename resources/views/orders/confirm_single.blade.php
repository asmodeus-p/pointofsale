<div>
    
    <x::navbar />
    <x::sidepanel />

    <h2>Confirm Order for {{ $product->name }}</h2>

    <form method="POST" action="{{ route('buy.now.single', $product) }}">
        @csrf
        <p>Price: ₱{{ number_format($product->price, 2) }}</p>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" value="1" min="1" max="{{ $product->quantity }}" required>
        <br>
        <button class="btn btn-success mt-2">Place Order</button>
    </form>
</div>