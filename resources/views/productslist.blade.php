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

 
<nav class="dark:bg-gray-800 dark:border-gray-700 fixed top-0 z-50 w-full bg-white border-b border-gray-200">
  <div class="lg:px-5 lg:pl-3 px-3 py-3">
    <div class="flex items-center justify-between">
      <div class="rtl:justify-end flex items-center justify-start">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 inline-flex items-center p-2 text-sm text-gray-500 rounded-lg">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="https://flowbite.com" class="ms-2 md:me-24 flex">
          <img src="https://flowbite.com/docs/images/logo.svg" class="me-3 h-8" alt="FlowBite Logo" />
          <span class="sm:text-2xl whitespace-nowrap dark:text-white self-center text-xl font-semibold">PointOfSale</span>
        </a>
      </div>
      <button data-collapse-toggle="navbar-dropdown" type="button" class="md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg" aria-controls="navbar-dropdown" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="md:block md:w-auto hidden w-full" id="navbar-dropdown">
      <ul class="md:p-0 bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg">
        <li>
          <a href="#" class="md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent block px-3 py-2 text-white bg-blue-700 rounded-sm" aria-current="page">Home</a>
        </li>
        <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent flex items-center justify-between w-full px-3 py-2 text-gray-900 rounded-sm">Dropdown <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="w-44 dark:bg-gray-700 dark:divide-gray-600 z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm">
                <ul class="dark:text-gray-400 py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="#" class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2">Dashboard</a>
                  </li>
                  <li>
                    <a href="#" class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2">Create Order</a>
                  </li>
                  <li>
                    <a href="#" class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2">Orders</a>
                  </li>
                </ul>
                <div class="py-1">
                  <a href="#" class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white block px-4 py-2 text-sm text-gray-700">Sign out</a>
                </div>
            </div>
        </li>
        <li>
          <a href="#" class="hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent block px-3 py-2 text-gray-900 rounded-sm">Services</a>
        </li>
        <li>
          <a href="#" class="hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent block px-3 py-2 text-gray-900 rounded-sm">Pricing</a>
        </li>
        
      </ul>
    </div>
  

      
          <div class="ms-3 flex items-center">
            <div>
              <button type="button" class="focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 flex text-sm bg-gray-800 rounded-full" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-10 h-10 rounded-full" src="https://i.pinimg.com/736x/a8/89/7d/a8897d8e6590b1d9d968c47900d951b2.jpg" alt="user photo">
              </button>
            </div>
            <div class="dark:bg-gray-700 dark:divide-gray-600 z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-sm shadow-sm" id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="dark:text-white text-sm text-gray-900" role="none">
                  Neil Sims
                </p>
                <p class="dark:text-gray-300 text-sm font-medium text-gray-900 truncate" role="none">
                  neil.sims@flowbite.com
                </p>
              </div>
              <ul class="py-1" role="none">
                <li>
                  <a href="#" class="hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2 text-sm text-gray-700" role="menuitem">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2 text-sm text-gray-700" role="menuitem">Create Order</a>
                </li>

                <li>
                  <a href="#" class="hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2 text-sm text-gray-700" role="menuitem">Orders</a>
                </li>


                <li>
                  <a href="#" class="hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2 text-sm text-gray-700" role="menuitem">Earnings</a>
                </li>
                <li>
                  <form action="{{ route('logout') }}" method="POST"
                  class="hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2 text-sm text-gray-700"
                  role="menuitem"
                  >
                    @csrf
                    <button type="submit">Logout</button>
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  
</nav>

<x-sidepanel />

<div class="sm:ml-64 p-4">
<div class="mt-14 p-4" >
   

<div class="sm:rounded-lg relative overflow-x-auto shadow-md">
    <div class="flex-column md:flex-row md:space-y-0 dark:bg-gray-900 flex flex-wrap items-center justify-between pb-4 space-y-4 bg-white">
        <div>
            
        <p class="dark:text-gray-300 px-6 py-3 mt-2 text-xl font-semibold tracking-wide text-gray-800 uppercase rounded-md">
            Product Lists
        </p>



            <!-- Dropdown menu -->
            <div id="dropdownAction" class="w-44 dark:bg-gray-700 dark:divide-gray-600 z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm">
                <ul class="dark:text-gray-200 py-1 text-sm text-gray-700" aria-labelledby="dropdownActionButton">
                    <li>
                        <a href="#" class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2">Reward</a>
                    </li>
                    <li>
                        <a href="#" class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2">Promote</a>
                    </li>
                    <li>
                        <a href="#" class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2">Activate account</a>
                    </li>
                </ul>
                <div class="py-1">
                    <a href="#" class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white block px-4 py-2 text-sm text-gray-700">Delete User</a>
                </div>
            </div>
        </div>



        <label for="table-search" class="sr-only">Search</label>
        <a href="{{ route('products.create') }}">
        <div class="hover:bg-blue-900 focus:outline-none focus:ring-4 focus:ring-blue-300 font-small me-3 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center justify-center px-3 py-1 mb-3 text-sm text-center text-white transition-all bg-blue-700 rounded-full shadow-sm">
            Add Products
            
        </div>
        </a>


    </div>
    <table class="rtl:text-right dark:text-gray-400 w-full text-sm text-left text-gray-500">
        <thead class="bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-xs text-gray-700 uppercase">
            <tr>
               
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>


            @forelse ($products as $product)
                
            {{-- START CARD --}}
            <tr class="dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 bg-white border-b border-gray-200">
                
                <th scope="row" class="whitespace-nowrap dark:text-white flex items-center px-6 py-4 text-gray-900">
                    {{-- IMAGE --}}
                    @if ($product->image_path)
                        <img class="w-10 h-10" src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}">
                        <div class="ps-3">
                            <div class="text-base font-semibold">{{ $product->name }}</div>
                            <div class="font-normal text-gray-500">₱{{ number_format($product->price, 2) }}</div>
                        </div>
                    @else
                        <span class="text-sm text-gray-400">—</span>
                        
                    @endif
                        
                </th>

                {{-- STATUS --}}
               
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        @if ($product->is_hidden == 1)
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

                    <div class="inline-flex items-center justify-center  text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-2.5 py-0.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 ">
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                                <button type="submit">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>

            @empty

                <tr class="whitespace-nowrap dark:text-white flex items-center px-6 py-4 text-gray-900">
                    {{-- NONE FETCHED --}}
                    No products found.
                </tr>
                
            @endforelse

            {{-- END CARD --}}

        </tbody>
    </table>
</div>
           


        
         

         
</div>



<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>