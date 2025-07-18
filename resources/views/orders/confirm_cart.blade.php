<div>

    <x::navbar />
    <x::sidepanel />

    <h2>Confirm Your Cart Order</h2>

    <ul>
    @foreach($cartItems as $item)
        <li>{{ $item->product->name }} - {{ $item->quantity }} pcs (₱{{ $item->product->price }})</li>
    @endforeach
    </ul>

    <p><strong>Total:</strong> ₱{{ number_format($total, 2) }}</p>

    <form method="POST" action="{{ route('buy.now.cart') }}">
        @csrf
        <button class="btn btn-success">Place Order</button>
    </form>

</div>