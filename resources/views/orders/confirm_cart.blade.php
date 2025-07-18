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

   <div class="sm:ml-64 p-8 mt-14">

        <div class="dark:bg-gray-800 flex-1 w-full bg-white rounded">
            <div class="mb-6">
                <a href="{{ route('cart.index') }}" class="text-sm text-blue-600 hover:underline">&larr; Cart</a>
            </div>

            <h2 class="mb-4 text-xl font-bold">Confirm Your Cart Order</h2>
            <hr class="mb-4">
                @php
                    $total = 0;
                @endphp

         @foreach($cartItems as $item)
            @php
               $subtotal = $item->product->price * $item->quantity;
               $total += $subtotal;
            @endphp

            <div class="flex justify-between items-center mb-4">
               <div class="flex items-center space-x-3">
                  <img src="{{ asset('storage/' . $item->product->image_path) }}" alt="Product Image" class="w-12 h-12 rounded outline outline-gray-300">
                  <div>
                     <div class="font-semibold">{{ $item->product->name }}</div>
                     <div class="text-sm text-gray-500">Qty: {{ $item->quantity }} x {{ $item->product->price  }} </div>
                  </div>
               </div>
               <div class="text-blue-600 font-medium text-sm">
                  ₱{{ number_format($subtotal, 2) }}
               </div>
            </div>
         @endforeach

         <hr class="my-4">

         <div class="flex justify-between items-center font-semibold mb-4">
            <div>Total Amount</div>
            <div class="text-blue-600">₱{{ number_format($total, 2) }}</div>
         </div>
            <form method="POST" action="{{ route('buy.now.cart') }}">
                @csrf
                <button class="btn btn-success w-full px-4 py-2 text-white bg-blue-900 hover:bg-blue-500 text-center font-semibold rounded shadow-md">
                    Place Order</button>
            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    </body>
</html>