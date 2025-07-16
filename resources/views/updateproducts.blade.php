<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cybersofie</title>
</head>
<body class="flex items-center justify-center min-h-screen">

  <x-navbar />
  <x-sidepanel />

<form class="dark:bg-gray-900 rounded-xl max-w-2xl p-6 mx-auto bg-white shadow-md" action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
  <h5 class="dark:text-white md:col-span-2 mb-6 text-2xl font-semibold text-center text-gray-900">Edit Product</h5>
  @csrf
  @method('PUT')
  <div class="md:grid-cols-2 grid grid-cols-1 gap-6">
      
    <!-- Name -->
    <div>
      <label for="name" class="dark:text-white block mb-1 text-sm font-medium text-gray-900">Name</label>
      <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" placeholder="Product Name"
        class="bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white block w-full px-4 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg"
        required />
      
        @error('name')
          <p class="dark:text-red-400 mt-1 text-xs text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Category -->
    <div>
      <label for="category_id" class="dark:text-white block mb-1 text-sm font-medium text-gray-900">Category</label>
      <select name="category_id" id="category_id"
        class="bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white block w-full px-4 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg">
        @foreach ($categories as $category)
          <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
            {{ $category->name }}
          </option>
        @endforeach
      </select>

      @error('category_id')
          <p class="dark:text-red-400 mt-1 text-xs text-red-600">{{ $message }}</p>
      @enderror

    </div>

    <!-- Description -->
    <div class="md:col-span-2">
      <label for="description" class="dark:text-white block mb-1 text-sm font-medium text-gray-900">Description</label>
      <textarea name="description" id="description" rows="3" placeholder="Product description"
        class="bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white block w-full px-4 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg"
        required>{{ old('description', $product->description) }}</textarea>

        @error('description')
          <p class="dark:text-red-400 mt-1 text-xs text-red-600">{{ $message }}</p>
        @enderror
      
    </div>

    <!-- Price -->
    <div>
      <label for="price" class="dark:text-white block mb-1 text-sm font-medium text-gray-900">Price</label>
      <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}"
        class="bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white w-full px-4 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg"
        placeholder="$0.00" required />
        @error('price')
          <p class="dark:text-red-400 mt-1 text-xs text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Quantity -->
    <div>
      <label class="dark:text-white block mb-1 text-sm font-medium text-gray-900">Quantity</label>
      <div
        class="dark:border-gray-600 dark:bg-gray-800 flex items-center w-full overflow-hidden bg-white border border-gray-300 rounded-lg shadow-sm">
        <button type="button" id="decrement-button"
          class="dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 flex items-center justify-center w-10 h-10 text-gray-600">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
          </svg>
        </button>
        <input type="number" name="quantity" id="quantity" min="0" value="{{ old('quantity', $product->quantity) }}"
          class="dark:text-white focus:outline-none w-full h-10 text-sm text-center text-gray-800 bg-transparent"
          placeholder="0" required />
        <button type="button" id="increment-button"
          class="dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 flex items-center justify-center w-10 h-10 text-gray-600">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m-7-7h14" />
          </svg>
        </button>
      </div>
      <p class="dark:text-gray-400 mt-2 text-xs text-gray-500">Enter a quantity between 0-999.</p>
      @error('quantity')
        <p class="dark:text-red-400 mt-1 text-xs text-red-600">{{ $message }}</p>
      @enderror
    </div>

    <!-- Image Upload -->
    <div class="md:col-span-2">
      <label for="image-upload" class="dark:text-white block mb-1 text-sm font-medium text-gray-900">
        Product Image
      </label>
      <input type="file" name="image" id="image-upload" accept="image/*"
        class="bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer">
      <p class="dark:text-gray-400 mt-2 text-sm text-gray-500">Upload a product image (JPG, PNG, etc.).</p>

      {{-- @if ($product->image)
        <div class="mt-2">
          <p class="text-sm text-gray-500">Current Image:</p>
          <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="object-cover w-24 h-24 rounded">
        </div>
      @endif --}}
      
      @error('image')
        <p class="dark:text-red-400 mt-1 text-xs text-red-600">{{ $message }}</p>
      @enderror
    </div>

    <!-- Hidden Checkbox -->
    <div>
      <div class="flex items-center mt-2">
        <input name="is_hidden" id="hidden" type="checkbox"
          class="dark:bg-gray-700 dark:border-gray-600 focus:ring-blue-500 dark:focus:ring-blue-600 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"
          {{ old('is_hidden', $product->is_hidden) ? 'checked' : '' }}>
        <label for="hidden" class="dark:text-gray-300 ml-2 text-sm font-medium text-gray-900">Hidden</label>
      </div>
    </div>

    <!-- Submit Button -->
    <div class="md:col-span-2">
      <button type="submit"
        class="w-full py-2.5 px-5 text-sm font-semibold text-white bg-blue-700 hover:bg-blue-800 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 mt-4">
        Save
      </button>
    </div>

    

  </div>
</form>


</body>
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

</html>
