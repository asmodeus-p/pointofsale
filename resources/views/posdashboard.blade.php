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

   <x-navbar />
   <x-sidepanel />

   <div class="sm:ml-64 p-8 mt-12">
         <div class="sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 grid grid-cols-1 gap-4">
            @forelse ($products as $product)
               <a href="{{ route('products.show', $product->id) }}"> 
               <div class="bg-gray-50 dark:bg-gray-800 h-80 outline outline-1 outline-gray-200 hover:scale-105 hover:shadow-lg flex flex-col mt-4 overflow-hidden transition rounded-lg shadow-md">
                     @if ($product->image_path)
                        <img src="{{ asset('storage/' . $product->image_path) }}" class="object-cover w-full h-48" alt="Product Image">
                     @endif
                     <div class="p-4">
                        <h3 class="dark:text-gray-200 text-lg font-semibold text-gray-700 truncate">
                           {{ $product->name }}
                        </h3>
                        <p class="dark:text-white mt-2 text-base font-bold text-gray-800">
                           ₱{{ number_format($product->price, 2) }}
                        </p>
                        <p class="mt-1 text-sm text-gray-500">
                           Qty: {{ $product->quantity }}
                        </p>
                     </div>
               </div>
               </a>
            @empty
               <p class="col-span-5 text-center text-gray-500">No products available.</p>
            @endforelse
         </div>


   

   </div>
   <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>


</body>

</html>