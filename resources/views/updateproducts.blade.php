<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>PointOfSale</title>
</style>

</head>

<body>
    <div class="background-image"></div>

    <div class="relative z-20">
        <x-navbar />
        <x-sidepanel />
    </div>


    <div class="sm:ml-64 p-8 relative z-3">
        <form class="md:mt-14 mt-72 rounded-xl max-w-4xl p-6 mx-auto bg-white shadow-md" 
          action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            <h5 class="md:col-span-2 mb-6 text-2xl font-bold text-center text-gray-900">EDIT PRODUCT</h5>
            @csrf
            @method('PUT')

            <div class="md:grid-cols-2 relative z-10 grid grid-cols-1 gap-6">
                
                <div class="grid grid-cols-1 gap-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block mb-1 text-sm font-medium text-gray-900">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" placeholder="Product Name"
                            class="bg-gray-50 focus:ring-blue-500 focus:border-blue-500 block w-full px-4 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg"
                            required />
                        @error('name')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Category -->
                    <div>
                        <label for="category_id" class="block mb-1 text-sm font-medium text-gray-900">Category</label>
                        <select name="category_id" id="category_id"
                            class="bg-gray-50 focus:ring-blue-500 focus:border-blue-500 block w-full px-4 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg">
                            @foreach ($categories as $category)
                                <option  value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block mb-1 text-sm font-medium text-gray-900">Description</label>
                        <textarea name="description" id="description" rows="3" placeholder="Product description"
                            class="bg-gray-50 focus:ring-blue-500 focus:border-blue-500 block w-full px-4 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg"
                            required>{{ old('description', $product->description) }}</textarea>
                        @error('description')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Price & Quantity -->
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label for="price" class="block mb-1 text-sm font-medium text-gray-900">Price</label>
                            <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}"
                                class="bg-gray-50 focus:ring-blue-500 focus:border-blue-500 block w-full px-4 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg"
                                placeholder="$0.00" required />
                            @error('price')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block mb-1 text-sm font-medium text-gray-900">Quantity</label>
                            <div class="flex items-center w-full overflow-hidden bg-white border border-gray-300 rounded-lg shadow-sm">
                                <button type="button" id="decrement-button"
                                    class="hover:bg-gray-100 flex items-center justify-center w-10 h-10 text-gray-600">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                    </svg>
                                </button>
                                <input type="number" name="quantity" id="quantity" min="0" value="{{ old('quantity', $product->quantity) }}"
                                    class="focus:ring-blue-500 focus:border-blue-500 block w-full h-10 px-2 text-sm text-center text-gray-900 border-0"
                                    placeholder="0" required />
                                <button type="button" id="increment-button"
                                    class="hover:bg-gray-100 flex items-center justify-center w-10 h-10 text-gray-600">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m-7-7h14" />
                                    </svg>
                                </button>
                            </div>
                            <p class="mt-2 text-xs text-gray-500">Enter a quantity between 0–999.</p>
                            @error('quantity')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Image Upload -->
                <div class="flex flex-col justify-between">
                    <div class="flex-grow flex flex-col items-center justify-center border border-gray-300 rounded-lg bg-gray-50 min-h-[200px] relative overflow-hidden">
                      <label for="image-upload" class="z-3 text-gray-500 cursor-pointer">
                          Choose File
                          <input type="file" name="image" id="image-upload" accept="image/*" class="hidden">
                      </label>

                      <img id="image-preview"
                        src="{{ old('image', $product->image_path) }}"
                        class="absolute inset-0 object-contain w-full h-full {{ $product->image_path ? '' : 'hidden' }}"
                        alt="Image Preview">

                  </div>
                    @error('image')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Hidden Checkbox -->
                <div class="md:col-span-2">
                    <div class="flex items-center mt-2">
                        <input name="is_hidden" id="hidden" type="checkbox"
                            class="focus:ring-blue-500 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"
                            {{ old('is_hidden', $product->is_hidden) ? 'checked' : '' }}>
                        <label for="hidden" class="ml-2 text-sm font-medium text-gray-900">Hidden</label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="md:col-span-2">
                    <button type="submit"
                        class="w-full py-2.5 px-5 text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 mt-4 transition">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('increment-button').onclick = () => {
            const input = document.getElementById('quantity');
            input.value = parseInt(input.value || 0) + 1;
        };

        document.getElementById('decrement-button').onclick = () => {
            const input = document.getElementById('quantity');
            if (parseInt(input.value) > 0) input.value = parseInt(input.value) - 1;
        };
    </script>

    
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <script>
      const imageInput = document.getElementById('image-upload');
      const imagePreview = document.getElementById('image-preview');

      imageInput.addEventListener('change', function () {
          const file = this.files[0];

          if (file && file.type.startsWith('image/')) {
              const reader = new FileReader();
              reader.onload = function (e) {
                  imagePreview.src = e.target.result;
                  imagePreview.classList.remove('hidden');
                  imagePreview.style.zIndex = 10; // Ensure it appears above the background
              };
              reader.readAsDataURL(file);
          } else {
              imagePreview.src = '';
              imagePreview.classList.add('hidden');
          }
      });
  </script>


</body>

<style>
    html, body {
        margin: 0;
        padding: 0;
        height: 100%;
    }

    body {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }

    .background-image {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url("{{ asset('img/a.png') }}") no-repeat center center;
        background-size: cover;
        opacity: 0.5;
        z-index: 0;
    }

    main {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 600px;
        padding: 2rem;
        background-color: rgba(255, 255, 255, 0.9); 
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }
</style>

</html>

