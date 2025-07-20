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

<body>
    <div class="bg-wrapper bg-blue-200/50">
      <div class="bg-image"></div>
    </div>
    
   <x-navbar />
   <x-sidepanel />

   <div class="sm:ml-64 p-8 mt-14 bg-transparent">

      <!-- form -->
      <div class="w-full dark:bg-gray-800">
         <div class="md:flex-row flex flex-col gap-6">
            <div class="w-full flex justify-center">
               <img 
                  src="{{ asset('storage/' . $product->image_path) }}" 
                  class="w-full max-w-md h-auto object-cover rounded-lg outline outline-1 outline-gray-300" 
                  alt="{{ $product->name }}">
            </div>

            <div class="w-full md:mt-0">
               <h2 class="dark:text-white text-2xl font-bold text-gray-800">{{ $product->name }}</h2>
               <p class="mt-2 text-xl font-semibold text-indigo-600">₱{{ number_format($product->price, 2) }}</p>
               <p class="dark:text-gray-300 mt-2 text-sm text-gray-600">Quantity: {{ $product->quantity }}</p>
               <p class="dark:text-gray-300 mt-4 text-sm text-gray-700">{{ $product->description }}</p>

               <br>
               <div class="flex space-x-3">
                  <form action="{{ route('cart.store') }}" method="POST" onsubmit="disableButton(this)">
                     @csrf
                     <input type="hidden" name="product_id" value="{{ $product->id }}">
                     <input type="hidden" name="quantity" value="1">
                     <button type="submit">
                        <div class="inline-flex items-center justify-center px-3 py-1 mb-3 text-sm text-white bg-blue-700 rounded-full hover:bg-blue-900 shadow-sm">
                           Add to Cart
                        </div>
                     </button>
                  </form>

                  <a href="{{ route('order.single.form', $product) }}" class="btn btn-primary inline-flex items-center justify-center px-3 py-1 mb-3 text-sm text-white bg-blue-700 rounded-full hover:bg-blue-900 shadow-sm">
                     Buy Now</a>
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
         button.querySelector('div').innerText = 'Loading...'; // Optional: change text
      }
   </script>


</body>

</html>












