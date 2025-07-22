@php
    $user = auth()->user();
    $initial = strtoupper(substr($user->name, 0, 1));
@endphp

<div class="shadown-lg border border-gray-200">
    <div class="px-8 py-4 text-center border-b border-gray-200">
        <div class="mx-auto mb-2 h-12 w-12 rounded-full bg-blue-600 flex items-center justify-center text-white text-xl font-semibold">
            {{ $initial }}
        </div>
        <p class="text-sm font-medium text-gray-900">
            {{ $user->name }}
        </p>
        <p class="text-sm text-gray-500 dark:text-gray-300">
            {{ $user->email }}
        </p>
    </div>

    <ul class="py-1 text-sm" role="none">
        <li class="border-t border-gray-200">
            <form action="{{ route('logout') }}" method="POST" role="menuitem">
                @csrf
                <button type="submit"
                    class="text-center w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 ">
                    Sign Out
                </button>
            </form>
        </li>
    </ul>
</div>
