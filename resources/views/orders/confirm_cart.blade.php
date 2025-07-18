<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        @vite('resources/css/app.css')
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
        <title>My Orders</title>
    </head>
    <body>


        <x-navbar />
        <x-sidepanel />

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
    </body>
</html>