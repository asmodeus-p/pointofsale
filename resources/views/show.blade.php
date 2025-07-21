<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @vite('resources/css/app.css')
   <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="css/styles.css">
   <title>PointOfSale</title>
       <style>
        body {
        margin: 0;
        position: relative;
        }

        .bg-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        overflow: hidden;
        }

        .bg-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('../img/a.png'); /* or your actual path */
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 0.5;

        
        }


        .content {
        position: relative;
        z-index: 1;
        padding: 40px;
        }
    </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900">
   <div class="bg-wrapper bg-blue-200/50">
      <div class="bg-image"></div>
   </div>

   <x-navbar />
   <x-sidepanel />

   <div class="sm:ml-64 sm:px-8 mt-14 justify-items-center px-4 py-10">
      <!-- Product Form Container -->
      <div class="dark:bg-gray-800 w-full 2xl:w-[1100px]">
         <div class="lg:flex-row flex flex-col items-center gap-6 p-6 bg-white rounded-lg shadow-lg">
            
            <!-- Product Image -->
            <div class="w-64 h-64 sm:h-64 lg:h-[32rem] lg:w-[32rem] flex justify-center items-center overflow-hidden rounded-lg outline outline-1 outline-gray-300">
               <img 
                  src="{{ asset('storage/' . $product->image_path) }}" 
                  class="object-cover w-64 h-64 sm:h-64 lg:h-[32rem] lg:w-[32rem]" 
                  alt="{{ $product->name }}">
            </div>


            <!-- Product Details -->
            <div class="w-full max-w-xl flex flex-col justify-between h-auto sm:h-[28rem] lg:h-[32rem]">
               <div>
                  <h2 class="dark:text-white mt-4 text-2xl font-bold text-gray-800">{{ $product->name }}</h2>
                  <p class="mt-2 text-xl font-semibold text-indigo-600">₱{{ number_format($product->price, 2) }}</p>
                  <p class="dark:text-gray-300 mt-2 text-sm text-gray-600">Quantity: {{ $product->quantity }}</p>

                  <!-- Scrollable Description -->
                  <div class="mt-4 h-40 sm:h-52 lg:h-[20rem] overflow-y-auto text-sm text-gray-700 dark:text-gray-300 rounded p-2">
                      {{ $product->description }}
                  </div>
               </div>

               <!-- Action Buttons -->
               <div class="sm:mt-4 flex items-center justify-center mt-6 space-x-3">
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
