<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cybersofie</title>
</head>
<body class="flex items-center justify-center min-h-screen">
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
  

      
          <div class="ms-20 flex items-center">
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
<aside id="logo-sidebar" class="sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700 fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200" aria-label="Sidebar">
   <div class="dark:bg-gray-800 h-full px-3 pb-4 overflow-y-auto bg-white">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="#" class="dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group flex items-center p-2 text-gray-900 rounded-lg">
               <svg class="dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
               </svg>
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="#" class="dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group flex items-center p-2 text-gray-900 rounded-lg">
               <svg class="shrink-0 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                  <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
               </svg>
               <span class="ms-3 whitespace-nowrap flex-1">Create Order</span>
               <span class="ms-3 dark:bg-gray-700 dark:text-gray-300 inline-flex items-center justify-center px-2 text-sm font-medium text-gray-800 bg-gray-100 rounded-full">Pro</span>
            </a>
         </li>
         <li>
            <a href="#" class="dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group flex items-center p-2 text-gray-900 rounded-lg">
               <svg class="shrink-0 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
               </svg>
               <span class="ms-3 whitespace-nowrap flex-1">Orders</span>
               <span class="ms-3 dark:bg-blue-900 dark:text-blue-300 inline-flex items-center justify-center w-3 h-3 p-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">3</span>
            </a>
         </li>
         <li>
            <a href="#" class="dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group flex items-center p-2 text-gray-900 rounded-lg">
               <svg class="shrink-0 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                  <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
               </svg>
               <span class="ms-3 whitespace-nowrap flex-1">Categories</span>
            </a>
         </li>
         <li>
            <a href="#" class="dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group flex items-center p-2 text-gray-900 rounded-lg">
               <svg class="shrink-0 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                  <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
               </svg>
               <span class="ms-3 whitespace-nowrap flex-1">Products</span>
            </a>
         </li>
         <li>
            <a href="#" class="dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group flex items-center p-2 text-gray-900 rounded-lg">
               <svg class="shrink-0 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
               </svg>
               <span class="ms-3 whitespace-nowrap flex-1">Customers</span>
            </a>
         </li>
         <li>
            <a href="#" class="dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group flex items-center p-2 text-gray-900 rounded-lg">
               <svg class="shrink-0 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                  <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                  <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
               </svg>
               <span class="ms-3 whitespace-nowrap flex-1">Admins</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

<form class="dark:bg-gray-900 rounded-xl max-w-2xl p-6 mx-auto bg-white shadow-md" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
  <h5 class="dark:text-white md:col-span-2 mb-6 text-2xl font-semibold text-center text-gray-900">Add Product</h5>
  @csrf

    

  <div class="md:grid-cols-2 grid grid-cols-1 gap-6">
      
    <!-- Name -->
    <div>
      <label for="name" class="dark:text-white block mb-1 text-sm font-medium text-gray-900">Name</label>
      <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Product Name"
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
        required>{{ old('description') }}</textarea>

        @error('description')
          <p class="dark:text-red-400 mt-1 text-xs text-red-600">{{ $message }}</p>
        @enderror
      
    </div>

    <!-- Price -->
    <div>
      <label for="price" class="dark:text-white block mb-1 text-sm font-medium text-gray-900">Price</label>
      <input type="number" name="price" id="price" value="{{ old('price') }}"
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
        <input type="number" name="quantity" id="quantity" min="0" value="{{ old('quantity', 0) }}"
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
      @error('image')
        <p class="dark:text-red-400 mt-1 text-xs text-red-600">{{ $message }}</p>
      @enderror
    </div>

    <!-- Hidden Checkbox -->
    <div>
      <div class="flex items-center mt-2">
        <input name="is_hidden" id="hidden" type="checkbox"
          class="dark:bg-gray-700 dark:border-gray-600 focus:ring-blue-500 dark:focus:ring-blue-600 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"
          {{ old('is_hidden') ? 'checked' : '' }}>
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
