<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Your Cart</title>
</head>
<body>
    <x-navbar />
    <x-sidepanel />

    <div class="sm:ml-64 mt-14 p-8">
        <div class="dark:bg-gray-800 flex-1 w-full p-6 bg-white rounded">
            <h1 class="mb-4 text-xl font-bold">Your Cart</h1>

            @foreach ($cartItems as $item)
                <div class="flex flex-row justify-between items-center p-4 mb-4 border rounded {{ $item->product->quantity < $item->quantity ? 'opacity-50' : '' }}">
                    
                    {{-- Product Info with Image --}}
                    <div class="flex items-center gap-4 w-1/2">
                        <img src="{{ asset('storage/' . $item->product->image_path) }}" alt="{{ $item->product->name }}" class="w-12 h-12 rounded outline outline-gray-300">
                        <div>
                            <div class="font-semibold">{{ $item->product->name }}</div>
                            <div class="font-medium text-blue-600">₱{{ number_format($item->product->price, 2) }}</div>
                        </div>
                    </div>

                    {{-- Quantity & Controls --}}
                    <div class="flex items-center gap-3">
                        {{-- Decrement --}}
                        <div class="flex flex-col items-center gap-1"> 
                            {{-- Quantity Controls --}}
                            <div class="flex items-center gap-2">
                                <button onclick="updateCart('{{ $item->id }}', 'decrement', '{{ $item->product->quantity }}')" class="px-3 py-1 text-lg bg-gray-200 rounded-full font-bold"
                                @if($item->product->quantity < $item->quantity) disabled @endif>−</button>

                                <span id="qty-{{ $item->id }}" class="w-8 text-center">{{ $item->quantity }}</span>

                                <button onclick="updateCart('{{ $item->id }}', 'increment', '{{ $item->product->quantity }}')" class="px-3 py-1 text-lg bg-gray-200 rounded-full font-bold"
                                @if($item->product->quantity < $item->quantity) disabled @endif>+</button>
                            </div>

                            {{-- Out of Stock Warning --}}
                            @if($item->product->quantity < $item->quantity)
                                <p class="text-xs text-red-600 font-medium mt-1">Out of stock</p>
                            @endif
                            
                        </div>
                        
                        {{-- Delete --}}
                        <form id="delete-form-{{ $item->id }}" action="{{ route('cart.destroy', $item->id) }}" method="POST" class="hidden">
                            @csrf
                            @method('DELETE')
                        </form>
                        <button onclick="document.getElementById('delete-form-{{ $item->id }}').submit();" class="px-3 py-1 text-sm text-white bg-red-500 hover:bg-red-600 rounded-full">Delete</button>
                    </div>
                </div>
            @endforeach

            {{-- Footer CTA --}}
            @if($cartItems->count())
                <a href="{{ route('order.cart.form') }}" class="hover:bg-blue-700 inline-block px-4 py-2 mt-4 text-white bg-blue-600 rounded">Buy All Now</a>
            @else
                <p class="mt-6 text-center text-gray-500">There’s nothing in your cart.</p>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <script>
        function updateCart(cartId, action, maxStock = null) {
            const qtySpan = document.getElementById('qty-' + cartId);
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const currentQty = parseInt(qtySpan.innerText);

            if (action === 'increment' && maxStock !== null && currentQty >= maxStock) {
                alert('Maximum stock reached');
                return;
            }

            let newQty = currentQty;
            if (action === 'increment') newQty++;
            else if (action === 'decrement') newQty--;

            if (newQty < 1) {
                if (confirm('Quantity is now 0. Remove from cart?')) {
                    document.getElementById('delete-form-' + cartId).submit();
                }
                return;
            }

            fetch(`{{ url('/cart') }}/${cartId}`, {
                method: 'PUT',
                headers: {
                    'X-CSRF-TOKEN': token,
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ quantity: newQty })
            })
            .then(response => {
                if (!response.ok) throw new Error('Update failed');
                return response.json();
            })
            .then(data => {
                qtySpan.innerText = data.quantity;
            })
            .catch(error => {
                console.error(error);
                alert('Something went wrong. Please try again.');
            });
        }
    </script>
</body>
</html>
