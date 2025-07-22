<div >
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
                     @php
                        $initial = strtoupper(substr(Auth::user()->name, 0, 1));
                     @endphp
                     <div class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center text-white text-sm font-semibold">
                        {{ $initial }}
                     </div>

                  </button>
               </div>
               <div class="dark:bg-gray-700 dark:divide-gray-600 z-50 hidden my-4 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-lg" id="dropdown-user">
                  <x-dropdown-menu />
               </div>
            </div>
         </div>
      </div>

   </nav>
</div>