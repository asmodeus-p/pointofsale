<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    <aside id="logo-sidebar" class="sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700 fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200" aria-label="Sidebar">
        <div class="dark:bg-gray-800 h-full px-3 pb-4 overflow-y-auto bg-white">

            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('dashboard') }}" class="dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group flex items-center p-2 text-gray-900 rounded-lg">
                        <svg class="dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('customers.index') }}" class="dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group flex items-center p-2 text-gray-900 rounded-lg">
                        <svg class="shrink-0 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                        </svg>
                        <span class="ms-3 whitespace-nowrap flex-1">Create Order</span>
                        <span class="ms-3 dark:bg-gray-700 dark:text-gray-300 inline-flex items-center justify-center px-2 text-sm font-medium text-gray-800 bg-gray-100 rounded-full">Pro</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group flex items-center p-2 text-gray-900 rounded-lg">
                        <svg class="shrink-0 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="ms-3 whitespace-nowrap flex-1">Orders</span>
                        <span class="ms-3 dark:bg-blue-900 dark:text-blue-300 inline-flex items-center justify-center w-3 h-3 p-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">3</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('categories.index') }}" class="dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group flex items-center p-2 text-gray-900 rounded-lg">
                        <svg class="shrink-0 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="ms-3 whitespace-nowrap flex-1">Categories</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('products.index') }}" class="dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group flex items-center p-2 text-gray-900 rounded-lg">
                        <svg class="shrink-0 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                        </svg>
                        <span class="ms-3 whitespace-nowrap flex-1">Products</span>
                    </a>
                </li>
                <li>

                </li>

                @if(Str::startsWith($routeName, 'dashboard'))
                    <li>
                        <a href="{{ route('admins.index') }}" method="POST" class="dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group flex items-center p-2 text-gray-900 rounded-lg">
                            @csrf
                            <svg class="shrink-0 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                                <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                                <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                            </svg>
                            <span class="ms-3 whitespace-nowrap flex-1">Admins</span>
                            <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal" class="hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600 inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg" type="button">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                    <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                </svg>
                            </button>

                            <!-- Dropdown menu -->

                            <div id="dropdownDotsHorizontal" class="w-44 dark:bg-gray-700 dark:divide-gray-600 z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm">
                                <ul class="dark:text-gray-200 py-2 text-sm text-gray-700" aria-labelledby="dropdownMenuIconHorizontalButton">
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2">Earnings</a>
                                    </li>
                                </ul>
                                <div class="py-2">
                                    <a href="#" class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white block px-4 py-2 text-sm text-gray-700">Separated link</a>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group flex items-center p-2 text-gray-900 rounded-lg">
                            <svg class="shrink-0 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                                <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                                <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                            </svg>
                            <span class="ms-3 whitespace-nowrap flex-1">logout</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @elseif(Str::startsWith($routeName, 'admins.index'))
                    <li>
                        <a href="{{ route('customers.index') }}" class="dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group flex items-center p-2 text-gray-900 rounded-lg">
                        <svg class="shrink-0 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                        </svg>
                        <span class="ms-3 whitespace-nowrap flex-1">Customers</span>
                        </a>
                    </li>
                    <li>
                    <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center justify-between w-full px-4 py-2">Dropdown<svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg></button>
                                <div id="doubleDropdown" class="w-44 dark:bg-gray-700 z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm">
                                    <ul class="dark:text-gray-200 py-2 text-sm text-gray-700" aria-labelledby="doubleDropdownButton">
                                    <li>
                                        <a href="/addadmin" class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2">Add Admin</a>
                                    </li>
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2">View Admins</a>
                                    </li>
                                    
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2">Earnings</a>
                            </li>
                            <li>
                                <a href="#" class="hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2">Sign out</a>
                            </li>
                            </ul>
                        </div>
                    </li>
                @elseif(Str::startsWith($routeName, 'products.index'))

                    <li>
                        <a href="{{ route('customers.index') }}" class="dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group flex items-center p-2 text-gray-900 rounded-lg">
                        <svg class="shrink-0 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                        </svg>
                        <span class="ms-3 whitespace-nowrap flex-1">Customers</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admins.index') }}" class="dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group flex items-center p-2 text-gray-900 rounded-lg">
                        <svg class="shrink-0 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                            <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                            <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                        </svg>
                        <span class="ms-3 whitespace-nowrap flex-1">Admins</span>
                        </a>
                    </li>

                @endif
            </ul>
        </div>
    </aside>
</div>