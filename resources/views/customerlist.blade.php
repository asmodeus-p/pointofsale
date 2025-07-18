<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Document</title>
    </head>
    <body>

        <x-navbar />
        <x-sidepanel />

        <div class="sm:ml-64 p-4">
            <div class="p-4" >
                <div class="flex justify-between mt-16">
                    <h1 class="text-3xl font-bold">Customers</h1>
                    <x-filter-bar :sortFields="['name', 'email', 'created_at']" />
                </div>

                <div class="overflow-x-auto bg-gray-100 rounded shadow">
                    <table class="rtl:text-right dark:text-gray-400 w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all-search" type="checkbox" class="focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($customers as $customer)
                                <tr class="hover:bg-gray-50 border-b">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-1" type="checkbox" class="focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <th scope="row" class="whitespace-nowrap dark:text-white flex items-center px-6 py-4 text-gray-900">
                                        <div class="ps-3">
                                            <div class="text-base font-semibold capitalize">{{ $customer->name }}</div>
                                        </div>  
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $customer->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="dark:text-blue-500 hover:underline font-medium text-blue-600">Edit user</a>
                                    </td>
                                </tr>
                            @empty
                                <h2>No Customers Found</h2>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>


    </body>
</html>