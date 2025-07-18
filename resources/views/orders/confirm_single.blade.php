<!DOCTYPE html>
<html lang='en'>
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

        <h2>Confirm Order for {{ $product->name }}</h2>

        <form method="POST" action="{{ route('buy.now.single', $product) }}">
            @csrf
            <p>Price: ₱{{ number_format($product->price, 2) }}</p>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" value="1" min="1" max="{{ $product->quantity }}" required>
            <br>
            <button class="btn btn-success mt-2">Place Order</button>
        </form>
    </body>
</html>