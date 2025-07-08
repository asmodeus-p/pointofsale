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


<nav class="dark:bg-gray-800 dark:border-gray-700 fixed top-0 z-50 w-full bg-white border-b border-gray-200">
  <div class="lg:px-5 lg:pl-3 px-3 py-3">
    <div class="flex items-center justify-between">
      <div class="rtl:justify-end flex items-center justify-start">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 inline-flex items-center p-2 text-sm text-gray-500 rounded-lg">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="https://ph.pinterest.com/pin/6544361953826290/">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="https://flowbite.com" class="ms-2 md:me-24 flex">
          <img src="https://i.pinimg.com/736x/c3/ef/3c/c3ef3ce18a0327cad9dd3040baa45241.jpg" class="me-3 h-8" alt="FlowBite Logo" />
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
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
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
                  <a href="#" class="hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2 text-sm text-gray-700" role="menuitem">Sign out</a>
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
                    <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                        <span class="sr-only">Action button</span>
                        Action
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
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
                <form method="GET" class="flex flex-wrap items-center gap-2 mb-4">
                  <input type="text" name="search" placeholder="Search name or email"
                        value="{{ request('search') }}"
                        class="px-2 py-1 border rounded-md" />

                  <select name="sort_by" class="px-2 py-1 border rounded-md">
                      <option value="created_at" {{ request('sort_by') == 'created_at' ? 'selected' : '' }}>Newest</option>
                      <option value="name" {{ request('sort_by') == 'name' ? 'selected' : '' }}>Name</option>
                      <option value="email" {{ request('sort_by') == 'email' ? 'selected' : '' }}>Email</option>
                  </select>

                  <select name="order" class="px-2 py-1 border rounded-md">
                      <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }}>Asc</option>
                      <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }}>Desc</option>
                  </select>

                  <button type="submit" class="px-3 py-1 text-white bg-blue-600 rounded">Apply</button>

                  {{-- Reset Filters --}}
                  <a href="{{ route('admins.index') }}"
                    class="hover:bg-gray-400 px-3 py-1 text-black bg-gray-300 rounded">
                      Reset Filters
                  </a>
              </form>

            </div>

            @if($admins->isEmpty())
                <p class="text-gray-600">No admins found.</p>
            @else
                <table class="rtl:text-right dark:text-gray-400 w-full text-sm text-left text-gray-500">
                    <thead class="bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-xs text-gray-700 uppercase">
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
                                Role
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

                        @foreach ($admins as $admin)
                            <tr class="dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 bg-white border-b border-gray-200">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox" class="focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="whitespace-nowrap dark:text-white flex items-center px-6 py-4 text-gray-900">
                                
                                <div class="ps-3">
                                    <div class="text-base font-semibold">{{ $admin->name }}</div>
                                    <div class="font-normal text-gray-500">{{ $admin->email }}</div>
                                </div>  
                            </th>
                            <td class="px-6 py-4 capitalize">
                                {{ $admin->role }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                @if(auth()->id() !== $admin->id)
                                    <form action="{{ route('admins.demote', $admin) }}"  {{-- pass the model, not just id --}}
                                        method="POST"
                                        onsubmit="return confirm('Demote {{ $admin->name }} to normal user?');">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="hover:underline text-red-600">Demote</button>
                                    </form>
                                @else
                                    <span class="text-gray-400">You</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    
</body>
</html>