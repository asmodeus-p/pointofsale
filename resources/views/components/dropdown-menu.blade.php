{{-- resources/views/components/dropdown-menu.blade.php --}}
@php
    $user = auth()->user();
@endphp


<div class="px-4 py-3 bg-gray-200" role="none">
    <p class="dark:text-white text-sm text-gray-900 capitalize" role="none">
        {{ $user->name }}
    </p>
    <p class="dark:text-gray-300 text-sm font-medium text-gray-900 truncate" role="none">
        {{ ucfirst($user->role) }} • {{ $user->email }}
    </p>
</div>

<ul class="py-1 text-sm" role="none">
    
    @if ($user->role === 'admin')
        <li>
            <a href="{{ route('dashboard') }}" 
            class="dropdown-link hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2 text-gray-700">
                Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('admins.index') }}" 
            class="dropdown-link hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2 text-gray-700">
                Admin List
            </a>
        </li>
        <li>
            <a href="{{ route('products.index') }}" 
            class="dropdown-link hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2 text-gray-700">
                Manage Products
            </a>
        </li>
        <li>
            <a href="{{ route('categories.index') }}" 
            class="dropdown-link hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2 text-gray-700">
                Manage Categories
            </a>
        </li>
        <li>
            <a href="{{ route('customers.index') }}" 
            class="dropdown-link hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2 text-gray-700">
                Customers
            </a>
        </li>
        <li>
            <a href="{{ route('earnings.index') }}" 
            class="dropdown-link hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2 text-gray-700">
                Earnings
            </a>
        </li>
    @elseif ($user->role === 'user')
        <li>
            <a href="{{ route('cart.index') }}"
            class="dropdown-link hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2 text-gray-700">
                My Cart
            </a>
        </li>
        <li>
            <a href="#"
            class="dropdown-link hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block px-4 py-2 text-gray-700">
                Orders
            </a>
        </li>
    @endif

    <li>
        <form action="{{ route('logout') }}" method="POST" role="menuitem">
            @csrf
            <button type="submit" 
            class="dropdown-link hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white block w-full px-4 py-2 text-left text-gray-700">
                Sign Out
            </button>
        </form>
    </li>
</ul>


<style>
    .dropdown-link {
        @apply block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white;
    }
</style>
