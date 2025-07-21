<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @vite('resources/css/app.css')
   <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="css/styles.css">
   <title>PointOfSale</title>
</head>

<body class="bg-gray-50 dark:bg-gray-900">
   <div class="bg-wrapper bg-blue-200/50">
      <div class="bg-image"></div>
   </div>

   <x-navbar />
   <x-sidepanel />

   <div class="sm:ml-64 px-4 sm:px-8 py-10 mt-14">
      <!-- Product Form Container -->
      <div class="w-full dark:bg-gray-800">
         <div class="flex flex-col lg:flex-row items-center gap-6">
            
            <!-- Product Image -->
            <div class="w-full flex justify-center">
               <img 
                  src="{{ asset('storage/' . $product->image_path) }}" 
                  class="h-64 sm:h-64 lg:h-[32rem] w-96 lg:w-[28rem] object-cover rounded-lg outline outline-1 outline-gray-300" 
                  alt="{{ $product->name }}">
            </div>

            <!-- Product Details -->
            <div class="w-full max-w-xl flex flex-col justify-between h-auto sm:h-[28rem] lg:h-[32rem]">
               <div>
                  <h2 class="mt-4 dark:text-white text-2xl font-bold text-gray-800">{{ $product->name }}</h2>
                  <p class="mt-2 text-xl font-semibold text-indigo-600">₱{{ number_format($product->price, 2) }}</p>
                  <p class="dark:text-gray-300 mt-2 text-sm text-gray-600">Quantity: {{ $product->quantity }}</p>

                  <!-- Scrollable Description -->
                  <div class="mt-4 h-40 sm:h-52 lg:h-[20rem] overflow-y-auto text-sm text-gray-700 dark:text-gray-300 rounded p-2">
                      {{ $product->description }}
                  </div>
               </div>

               <!-- Action Buttons -->
               <div class="flex justify-center items-center space-x-3 mt-6 sm:mt-4">
                  <form action="{{ route('cart.store') }}" method="POST" onsubmit="disableButton(this)">
                     @csrf
                     <input type="hidden" name="product_id" value="{{ $product->id }}">
                     <input type="hidden" name="quantity" value="1">
                     <button type="submit">
                        <div class="hover:bg-blue-700 inline-block px-4 py-2 text-white bg-blue-600 rounded">
                           Add to Cart
                        </div>
                     </button>
                  </form>

                  <a href="{{ route('order.single.form', $product) }}" class="hover:bg-blue-700 inline-block px-4 py-2 text-white bg-blue-600 rounded">
                     Buy Now
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
   <script>
      function disableButton(form) {
         const button = form.querySelector('button');
         button.disabled = true;
         button.querySelector('div').innerText = 'Loading...';
      }
   </script>
</body>

</html>
