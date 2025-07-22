@php
    $user = auth()->user();
    $initial = strtoupper(substr($user->name, 0, 1));
@endphp

<div class="shadown-lg border border-gray-200">
    <div class="px-8 py-4 text-center border-b border-gray-200">
        <div class="flex items-center justify-center w-12 h-12 mx-auto mb-2 text-xl font-semibold text-white bg-blue-600 rounded-full">
            {{ $initial }}
        </div>
        <p class="text-sm font-medium text-gray-900">
            {{ $user->name }}
        </p>
        <p class="dark:text-gray-300 text-sm text-gray-500">
            {{ $user->email }}
        </p>
    </div>
    <ul class="py-1 text-sm" role="none">
        <li class="hover:bg-gray-200 w-full px-4 py-2 text-sm text-left text-center text-gray-700 border-t border-gray-200">
            <a href="{{ route('user.edit') }}">Edit Profile</a>
        </li>
        <li class="border-t border-gray-200">
            <form action="{{ route('logout') }}" method="POST" role="menuitem">
                @csrf
                <button type="submit"
                    class="hover:bg-gray-200 w-full px-4 py-2 text-sm text-left text-center text-gray-700">
                    Sign Out
                </button>
            </form>
        </li>
    </ul>
</div>
