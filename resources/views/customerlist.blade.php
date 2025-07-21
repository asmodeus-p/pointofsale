<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="css/styles.css">
        <title>PointOfSale</title>
    </head>
    <body>
        
        <div class="bg-wrapper bg-blue-200/50">
            <div class="bg-image"></div>
        </div>

        <x-navbar />
        <x-sidepanel />

        <div class="sm:ml-64 p-8 mt-12">
            <h1 class=" mb-4 text-2xl font-bold">Customers</h1>
            
            <div class="flex justify-end">
                <x-filter-bar :sortFields="['name', 'email', 'created_at']" />
            </div>

                <div class="border-gray-400/50 overflow-x-auto bg-gray-100 border rounded shadow-lg">
                    <table class="rtl:text-right dark:text-gray-400 w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                            <tr>
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
                                    <th scope="row" class="whitespace-nowrap dark:text-white flex items-center px-6 py-4 text-gray-900">
                                        <div class="ps-3">
                                            <div class="text-base font-semibold capitalize">{{ $customer->name }}</div>
                                        </div>  
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $customer->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if($customer->role !== 'admin')
                                            <form action="{{ route('customers.promote', $customer->id) }}" method="POST" onsubmit="return confirm('Promote this user to admin?');">
                                                @csrf
                                                @method('PATCH')
                                                <button class="hover:bg-blue-700 px-3 py-1 text-white bg-blue-600 rounded">Promote to Admin</button>
                                            </form>
                                        @else
                                            <span class="italic text-gray-500">Already Admin</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                             <tr>
                                <td colspan="5" class="dark:text-white py-6 text-center text-gray-500">
                                    No Customers found.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>


    </body>
</html>