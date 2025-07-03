@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10 bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-1/2">
            <img src="{{ asset('storage/' . $product->image_path) }}" class="w-full h-auto object-cover rounded" alt="{{ $product->name }}">
        </div>
        <div class="w-full md:w-1/2 md:pl-6 mt-4 md:mt-0">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">{{ $product->name }}</h2>
            <p class="text-indigo-600 text-xl font-semibold mt-2">₱{{ number_format($product->price, 2) }}</p>
            <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">Quantity: {{ $product->quantity }}</p>
            <p class="text-sm text-gray-700 dark:text-gray-300 mt-4">{{ $product->description }}</p>
        </div>
    </div>
</div>
@endsection
