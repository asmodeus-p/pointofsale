<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Confirm Order</title>
</head>
<body>

    <x-navbar />
    <x-sidepanel />

    <div class="sm:ml-64 p-8 mt-14">
        <div class="dark:bg-gray-800 flex-1 w-full bg-white rounded p-6">
            <div class="mb-6">
                <a href="{{ route('products.show', $product->id) }}" class="text-sm text-blue-600 hover:underline">&larr; Back to Product</a>
            </div>

            <h2 class="mb-4 text-xl font-bold">Confirm Your Order</h2>
            <hr class="mb-4">

            <div class="flex justify-between items-center mb-4">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('storage/' . $product->image_path) }}" alt="Product Image" class="w-12 h-12 rounded outline outline-gray-300">
                    <div>
                        <div class="font-semibold">{{ $product->name }}</div>
                        <div class="text-sm text-gray-500">
                            Qty: <span id="qty-display">1</span> x ₱{{ number_format($product->price, 2) }}
                        </div>
                    </div>
                </div>
                <div class="text-blue-600 font-medium text-sm">
                    ₱<span id="total-display">{{ number_format($product->price, 2) }}</span>
                </div>
            </div>

            <form method="POST" action="{{ route('buy.now.single', $product) }}">
                @csrf

                <label for="quantity" class="block mb-1 font-medium">Quantity:</label>
                <input 
                    type="number" 
                    name="quantity" 
                    id="quantity"
                    value="1" 
                    min="1" 
                    max="{{ $product->quantity }}" 
                    required
                    class="mb-4 block w-32 px-2 py-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                >

                <button 
                    type="submit" 
                    onclick="this.disabled=true; this.form.submit();"
                    class="w-full px-4 py-2 text-white bg-blue-900 hover:bg-blue-500 text-center font-semibold rounded shadow-md">
                    Place Order
                </button>
            </form>
        </div>
    </div>

    <script>
        const quantityInput = document.getElementById('quantity');
        const qtyDisplay = document.getElementById('qty-display');
        const totalDisplay = document.getElementById('total-display');
        const price = '{{ $product->price }}';

        quantityInput.addEventListener('input', function () {
            const qty = parseInt(this.value) || 1;
            qtyDisplay.textContent = qty;
            totalDisplay.textContent = (qty * price).toFixed(2);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>
</html>
