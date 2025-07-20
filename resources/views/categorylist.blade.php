<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
   
    <title>Document</title>
</head>
<body>
 
  <x-navbar />
  <x-sidepanel />

<div class="sm:ml-64 p-4">

  <div class="flex justify-end mt-16">

    <x-filter-bar :sortFields="['name', 'created_at']" />
    
  </div>

<div class="p-4" >
   


<div class="sm:rounded-lg relative overflow-x-auto bg-gray-100 shadow-md">
    
    <table class="rtl:text-right dark:text-gray-400 w-full text-sm text-left text-gray-500">
    
        <tbody>

        <div class="container px-4 mx-auto mt-8">

            
            {{-- Add Category Button --}}
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-2xl font-bold">Categories</h2>
                @if(auth()->user() && auth()->user()->role === 'admin')
                    <button onclick="document.getElementById('addCategoryModal').classList.remove('hidden')" class="hover:bg-blue-700 px-4 py-2 text-white bg-blue-600 rounded">
                        + Add Category
                    </button>
                @endif
            </div>
            
            {{-- Success Message --}}
            @if(session('success'))
                <div class="px-4 py-2 mb-4 text-green-700 bg-green-100 border border-green-300 rounded">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Table --}}
            <div class="overflow-x-auto bg-gray-100 rounded shadow">
                <table class="w-full text-sm text-left">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                        <tr>
                            <th class="px-6 py-3">#</th>
                            <th class="px-6 py-3">Category Name</th>
                            <th class="px-6 py-3">Created</th>
                            @if(auth()->user() && auth()->user()->role === 'admin')
                                <th class="px-6 py-3">Actions</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($categories as $category)
                            <tr class="hover:bg-gray-50 border-b">
                                <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4">{{ $category->name }}</td>
                                <td class="px-6 py-4">{{ $category->created_at->format('M d, Y') }}</td>
                                @if(auth()->user() && auth()->user()->role === 'admin')
                                    <td class="px-6 py-4">
                                        <a href="{{ route('categories.edit', $category->id) }}" class="hover:underline me-4 text-green-600">Edit</a>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Delete this category?')" class="hover:underline text-red-600">Delete</button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Add Category Modal -->
                {{-- THE DOUBLE TAILWIND CLASS IS INTENTIONAL --}}
                <div id="addCategoryModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
                    <div class="relative w-full max-w-md p-6 bg-white rounded-lg shadow-lg">
                        <button onclick="document.getElementById('addCategoryModal').classList.add('hidden')" class="top-2 right-3 hover:text-gray-700 absolute text-lg text-gray-500">&times;</button>
                        <h2 class="mb-4 text-xl font-bold">Add New Category</h2>
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="block mb-1 text-gray-700">Category Name</label>
                                <input type="text" name="name" id="name" required class="focus:outline-none focus:ring focus:ring-blue-300 w-full px-3 py-2 border rounded">
                            </div>
                            <button type="submit" class="hover:bg-blue-700 px-4 py-2 text-white bg-blue-600 rounded">Save</button>
                        </form>
                    </div>
                </div>

            </div>

</tbody>

    </table>
</div>
           


        
         

         
</div>



<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>