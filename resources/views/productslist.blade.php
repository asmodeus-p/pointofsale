<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css">
    @vite('resources/css/app.css')
    <title>PointOfSale</title>
</head>
<body>

    <div class="bg-wrapper bg-blue-200/50">
        <div class="bg-image"></div>
    </div>

    <x-navbar />
    <x-sidepanel />

    @if(auth()->user() && auth()->user()->role === 'admin')
    <div class="sm:ml-64 p-8 mt-12">
        <h1 class="mb-4 text-2xl font-bold lg:mr-[545px]">Add Products</h1>
        
        <div class="flex justify-end">
            <x-filter-bar :sortFields="['name', 'price', 'created_at']" />
        </div>

        <div class="p-4">
            <div class="border-gray-400/50 sm:rounded-lg relative overflow-x-auto bg-white border shadow-md">
                <div class="flex-column md:flex-row md:space-y-0 dark:bg-gray-900 flex flex-wrap items-center justify-between px-4 pt-8 pb-4 space-y-4 bg-gray-100">
                    <a href="{{ route('products.create') }}">
                        <div class="hover:bg-blue-700 px-4 py-2 text-white bg-blue-600 rounded">
                            + Add Products
                        </div>
                    </a>
                </div>

                <table class="rtl:text-right dark:text-gray-400 w-full text-sm text-left text-gray-500">
                    <thead class="dark:bg-gray-700 dark:text-gray-400 text-xs text-gray-700 uppercase bg-gray-200">
                        <tr>
                            <th class="px-6 py-3">Name</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr class="hover:bg-gray-50 bg-gray-100 border-b">
                            <th scope="row" class="whitespace-nowrap dark:text-white flex items-center px-6 py-4 text-gray-900">
                                @if ($product->image_path)
                                    <img class="w-10 h-10" src="{{ $product->image_path }}" alt="{{ $product->name }}">
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">{{ $product->name }}</div>
                                        <div class="font-normal text-gray-500">₱{{ number_format($product->price, 2) }}</div>
                                    </div>
                                @else
                                    <span class="text-sm text-gray-400">—</span>
                                @endif
                            </th>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    @if ($product->is_hidden)
                                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Not Visible
                                    @else
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Visible
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('products.edit', $product->id) }}">
                                    <div class="inline-flex items-center justify-center text-white bg-green-700 hover:bg-green-900 focus:outline-none focus:ring-4 focus:ring-green-300 font-small rounded-full text-sm px-2.5 py-0.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 transition-all shadow-sm">
                                        Edit
                                    </div>
                                </a>

                                <div class="inline-flex items-center justify-center text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-2.5 py-0.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="dark:text-white py-6 text-center text-gray-500">No products found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @else
    <div class="sm:ml-64 p-4">
        <div class="p-4 mt-10">
            <div class="flex justify-end">
                <x-category-filter :categories="$categories" />
            </div>

            <div class="sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 grid grid-cols-1 gap-4">
                @forelse ($products as $product)
                <a href="{{ route('products.show', $product->id) }}">
                    <div class="bg-gray-50 dark:bg-gray-800 h-80 outline outline-1 outline-gray-400/50 hover:scale-105 hover:shadow-lg flex flex-col mt-4 overflow-hidden transition rounded-lg shadow-md">
                        @if ($product->image_path)
                            <img src="{{ $product->image_path }}" alt="{{ $product->name }}" class="object-cover w-full h-48">
                        @endif
                        <div class="p-4">
                            <h3 class="dark:text-gray-200 text-lg font-semibold text-gray-700 truncate">
                                {{ $product->name }}
                            </h3>
                            <p class="dark:text-white mt-2 text-base font-bold text-gray-800">
                                ₱{{ number_format($product->price, 2) }}
                            </p>
                            <p class="mt-1 text-sm text-gray-500">Qty: {{ $product->quantity }}</p>

                            @if($product->quantity == 0)
                                <p class="mt-2 text-xs font-medium text-red-600">Out of stock</p>
                            @elseif($product->quantity < 5)
                                <p class="mt-2 text-xs font-medium text-yellow-600">Low stock</p>
                            @endif
                        </div>
                    </div>
                </a>
                @empty
                <p class="col-span-5 text-center text-gray-500">No products available.</p>
                @endforelse
            </div>
        </div>
    </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
