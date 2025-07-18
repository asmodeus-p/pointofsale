<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @vite('resources/css/app.css')
   <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
   <title>Document</title>
</head>

<body>

<div class="flex flex-row mt-[20px] ">
      <div class="w-64">
         <x-navbar />
         <x-sidepanel />
      </div>

      <!-- form -->
      <div class="w-full p-[80px] bg-white dark:bg-gray-800">
         <div class="md:flex-row flex flex-col">
               <div class="w-full">
                  <img src="{{ asset('storage/' . $product->image_path) }}" class="w-[500px] h-[500px] object-cover rounded-lg outline outline-1 outline-gray-300" alt="{{ $product->name }}">
               </div>
               <div class="w-full mt-10">
                  <h2 class="dark:text-white text-2xl font-bold text-gray-800">{{ $product->name }}</h2>
                  <p class="mt-2 text-xl font-semibold text-indigo-600">₱{{ number_format($product->price, 2) }}</p>
                  <p class="dark:text-gray-300 mt-2 text-sm text-gray-600">Quantity: {{ $product->quantity }}</p>
                  <p class="dark:text-gray-300 mt-4 text-sm text-gray-700">{{ $product->description }}</p>


               <br><br>
               <form action="{{ route('cart.store') }}" method="POST" onsubmit="disableButton(this)">
                  @csrf
                  <input type="hidden" name="product_id" value="{{ $product->id }}">
                  <input type="hidden" name="quantity" value="1">
                  <button type="submit">
                     <div class="hover:bg-blue-900 focus:outline-none focus:ring-4 focus:ring-blue-300 font-small me-3 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center justify-center px-3 py-1 mb-3 text-sm text-center text-white transition-all bg-blue-700 rounded-full shadow-sm">
                           Add to Cart
                     </div>
                  </button>
               </form>


               <a href="{{ route('order.single.form', $product) }}" class="btn btn-primary">Buy Now</a>

               </div>
               
         </div>
      </div>
      
      
   </div>


   
   <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

   <script>
      function disableButton(form) {
         const button = form.querySelector('button');
         button.disabled = true;
         button.querySelector('div').innerText = 'Adding...'; // Optional: change text
      }
   </script>


</body>

</html>












