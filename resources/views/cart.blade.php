<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @vite('resources/css/app.css')
   <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
   <title>Document</title>
</head>

<body>

   <x-navbar />
   <x-sidepanel />

   <div class="sm:ml-64 p-8 mt-14">
      <!-- form -->
      <div class="dark:bg-gray-800 flex-1 w-full bg-white rounded">
         <h1 class="mb-4 text-xl font-bold">Your Cart</h1>
         
         @foreach($cartItems as $item)
         <div class="flex flex-row pb-4 mb-4 border-b {{ $item->product->quantity < $item->quantity ? 'opacity-50' : '' }}">

               <div class="flex w-1/2 space-x-3">
                  <img src="{{ asset('storage/' . $item->product->image_path) }}" alt="Product" class="w-12 h-12 rounded ml-[24px] outline outline-gray-300">
                  <div>
                     <div class="font-semibold">{{ $item->product->name }}</div>
                     <div class="font-medium text-blue-600">₱{{ number_format($item->product->price, 2) }}</div>
                  </div>
               </div>

               <div class="ml-[200px]">
                  <div class="flex items-center px-4 py-1 space-x-2 border rounded-full shadow-sm">
                     <button type="button" class="text-lg font-bold" onclick="decreaseQuantity( '{{ $item->id }}' )">-</button>
                     <span id="qty-{{ $item->id }}">{{ $item->quantity }}</span>
                     <button type="button" class="text-lg font-bold" onclick="increaseQuantity( '{{ $item->id }}', '{{ $item->product->quantity }}')">+</button>
                  </div>
               
                  @if($item->product->quantity < $item->quantity)
                     <p class="text-xs text-red-600 font-medium">Out of stock</p>
                  @endif
               </div>

               <div class=" ml-[15px] inline-flex items-center justify-center text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-3.5  text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 ">
                  <form action="{{ route('cart.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Do you want to remove this item from the cart?')">
                     @csrf
                     @method('DELETE')
                     <button type="submit">Delete</button>
                  </form>
               </div>
               
         </div>

         <form id="delete-form-{{ $item->id }}" action="{{ route('cart.destroy', $item->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
         </form>

         @endforeach

         @if($cartItems->count())
            <a href="{{ route('order.cart.form') }}" class="btn btn-primary">Buy All Now</a>
         @else
            <p class="text-gray-500 text-center mt-6">There’s nothing in your cart.</p>
         @endif
      </div>
   </div>

   
   <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

   <script>
      function increaseQuantity(id, maxQuantity) {
         const qtySpan = document.getElementById('qty-' + id);
         let current = parseInt(qtySpan.innerText);

         if (current < maxQuantity) {
               qtySpan.innerText = current + 1;
         } else {
               alert('Maximum stock reached');
         }
      }

      function decreaseQuantity(id) {
         const qtySpan = document.getElementById('qty-' + id);
         let current = parseInt(qtySpan.innerText);

         if (current > 1) {
            qtySpan.innerText = current - 1;
         } else {
            const confirmDelete = confirm(' Do you want to remove this item from the cart?');
            if (confirmDelete) {
               const form = document.getElementById('delete-form-' + id);
               if (form) {
                  form.submit();
               }
            }
         }
      }

      function updateQuantity(cartId, newQty) {
         fetch(`/cart/${cartId}`, {
            method: 'PUT',
            headers: {
               'Content-Type': 'application/json',
               'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ quantity: newQty })
         })
         .then(response => {
            if (!response.ok) throw new Error('Update failed');
            return response.json();
         })
         .then(data => {
            document.getElementById('qty-' + cartId).innerText = data.quantity;
         })
         .catch(error => {
            alert("Something went wrong.");
            console.error(error);
         });
      }
   </script>

</body>
</html>