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
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
               </svg>
            </button>





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
                        {{ auth()->user()->name }}
                     </p>
                     <p class="dark:text-gray-300 text-sm font-medium text-gray-900 truncate" role="none">
                        {{ auth()->user()->email }}
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

      <div class="mt-10 p-4">

         <div class="rounded-4xl grid grid-cols-5 gap-4 mb-3">

            <div class="bg-gray-50 dark:bg-gray-800 items-start h-80 mt-4 rounded-lg">
               <p class="ms-2 mt-2"> 1 </p>
               <p class="dark:text-gray-500 flex items-center justify-center text-2xl text-gray-400">

                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                  </svg>
               </p>
            </div>

            <div class="bg-gray-50 dark:bg-gray-800 items-start h-80 mt-4 rounded-lg">
               <p class="ms-2 mt-2"> 2 </p>
               <p class="dark:text-gray-500 flex items-center justify-center text-2xl text-gray-400">

                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                  </svg>
               </p>
            </div>

            <div class="bg-gray-50 dark:bg-gray-800 items-start h-80 mt-4 rounded-lg">
               <p class="ms-2 mt-2"> 3 </p>
               <p class="dark:text-gray-500 flex items-center justify-center text-2xl text-gray-400">

                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                  </svg>
               </p>
            </div>

            <div class="bg-gray-50 dark:bg-gray-800 items-start h-80 mt-4 rounded-lg">
               <p class="ms-2 mt-2"> 4 </p>
               <p class="dark:text-gray-500 flex items-center justify-center text-2xl text-gray-400">

                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                  </svg>
               </p>
            </div>

            <div class="bg-gray-50 dark:bg-gray-800 items-start h-80 mt-4 rounded-lg">
               <p class="ms-2 mt-2"> 5 </p>
               <p class="dark:text-gray-500 flex items-center justify-center text-2xl text-gray-400">

                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                  </svg>
               </p>
            </div>

         </div>

      </div>

   </div>
   <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>


</body>

</html>