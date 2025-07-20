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

   <main class="sm:ml-64 p-6">
    <div class="max-w-2xl mx-auto space-y-12">
        <h1 class="mb-6 text-3xl font-bold">Dashboard Overview</h1>

        <div class="md:grid-cols-2 grid grid-cols-1 gap-10">
            <x-dashboard-card icon="users" title="Total Users" :value="$totalUsers" />
            <x-dashboard-card icon="products" title="Total Products" :value="$totalProducts" />
            <x-dashboard-card icon="categories" title="Categories" :value="$totalCategories" />
            <x-dashboard-card icon="orders" title="Total Orders" :value="$totalOrders" />
            <x-dashboard-card icon="pending" title="Pending Orders" :value="$pendingOrders" />
            <x-dashboard-card icon="earnings" title="Total Earnings" :value="'₱' . number_format($totalEarnings, 2)" />
        </div>

         <div>
            <h2 class="mb-4 text-xl font-semibold text-gray-700">Quick Admin Actions</h2>
            <div class="sm:grid-cols-2 md:grid-cols-3 grid grid-cols-1 gap-4">

               <a href="{{ route('products.create') }}"
                  class="hover:bg-gray-50 flex items-center justify-between p-4 bg-white border rounded-lg shadow">
                  <div class="flex items-center gap-2">
                        {{-- Plus Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24"
                           stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M12 4v16m8-8H4" />
                        </svg>
                        <span class="font-medium text-gray-800">Add New Product</span>
                  </div>
               </a>

               <a href="{{ route('categories.index') }}"
                  class="hover:bg-gray-50 flex items-center justify-between p-4 bg-white border rounded-lg shadow">
                  <div class="flex items-center gap-2">
                        {{-- Tag Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-500" fill="none" viewBox="0 0 24 24"
                           stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M7 7h.01M3 3l7.5 7.5M3 3l18 18" />
                        </svg>
                        <span class="font-medium text-gray-800">Manage Categories</span>
                  </div>
               </a>

               <a href="{{ route('orders.index') }}"
                  class="hover:bg-gray-50 flex items-center justify-between p-4 bg-white border rounded-lg shadow">
                  <div class="flex items-center gap-2">
                        {{-- Clipboard Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24"
                           stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2" />
                        </svg>
                        <span class="font-medium text-gray-800">View All Orders</span>
                  </div>
               </a>

               <a href="{{ route('customers.index') }}"
                  class="hover:bg-gray-50 flex items-center justify-between p-4 bg-white border rounded-lg shadow">
                  <div class="flex items-center gap-2">
                        {{-- Users Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-500" fill="none" viewBox="0 0 24 24"
                           stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m5-4a4 4 0 11-8 0 4 4 0 018 0zm6 4a4 4 0 10-8 0 4 4 0 008 0z" />
                        </svg>
                        <span class="font-medium text-gray-800">Manage Users</span>
                  </div>
               </a>

               <a href="{{ route('earnings.index') }}"
                  class="hover:bg-gray-50 flex items-center justify-between p-4 bg-white border rounded-lg shadow">
                  <div class="flex items-center gap-2">
                        {{-- Cash Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-emerald-600 w-5 h-5" fill="none" viewBox="0 0 24 24"
                           stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2m0 4v2m4-6a4 4 0 10-8 0 4 4 0 008 0zm6-2a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h16a2 2 0 002-2V10z" />
                        </svg>
                        <span class="font-medium text-gray-800">View Earnings</span>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </main>

   <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
   
</body>
</html>