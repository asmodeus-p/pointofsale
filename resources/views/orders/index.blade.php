<h2>My Orders</h2>

@foreach($orders as $order)
    <div class="card">
        <p><strong>Order #{{ $order->id }}</strong> - Status: {{ $order->status }}</p>
        <ul>
            @foreach ($order->items as $item)
                <li>{{ $item->product->name }} - {{ $item->quantity }} x ₱{{ $item->price_at_purchase }}</li>
            @endforeach
        </ul>
        <p>Total: ₱{{ $order->total_price }}</p>
    </div>
@endforeach
