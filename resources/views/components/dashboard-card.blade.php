@props(['title', 'value', 'icon' => ''])

@php
    $icons = [
        'users' => '<svg class="w-6 h-6 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m5-4a4 4 0 11-8 0 4 4 0 018 0zm6 4a4 4 0 10-8 0 4 4 0 008 0z" /></svg>',
        'products' => '<svg class="w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6M9 21h6m-6 0a3 3 0 006 0m-6 0v-1m6 1v-1m-3-6h.01M4 13h16" /></svg>',
        'categories' => '<svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" /></svg>',
        'orders' => '<svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18" /></svg>',
        'pending' => '<svg class="w-6 h-6 text-orange-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>',
        'earnings' => '<svg class="text-emerald-600 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2m0 4v2m4-6a4 4 0 10-8 0 4 4 0 008 0zm6-2a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h16a2 2 0 002-2V10z" /></svg>',
    ];
@endphp

<div class="hover:scale-105 flex items-center h-32 p-4 transition-transform bg-white border rounded-lg shadow">
    <div class="mr-4">
        {!! $icons[$icon] ?? '' !!}
    </div>
    <div>
        <h3 class="text-sm font-medium text-gray-500">{{ $title }}</h3>
        <p class="mt-1 text-xl font-semibold text-gray-800">{{ $value }}</p>
    </div>
</div>
