<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        @vite('resources/css/app.css')
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
        <title>My Orders</title>
    </head>
    <body>

    <x-navbar />
    <x-sidepanel />

    <div class="sm:ml-64 p-8 mt-12">
        <h2 class="mb-4 text-xl font-semibold">My Orders</h2>

            <!-- <div class="w-max"> -->
                @foreach($orders as $order)
                    <div class="p-4 mb-4 bg-white rounded shadow">
                        <p><strong>Order #{{ $order->id }}</strong> - Status: {{ ucfirst($order->status) }}</p>
                        <ul class="ml-4 list-disc list-inside">
                            @foreach ($order->items as $item)
                                <li>{{ $item->product->name }} - {{ $item->quantity }} x ₱{{ $item->price_at_purchase }}</li>
                            @endforeach
                        </ul>
                        <p class="mt-2 font-bold">Total: ₱{{ number_format($order->total_price, 2) }}</p>

                        @if(Auth::user()->role === 'admin' && $order->status === 'pending')
                            <div x-data="{ open: false }">
                                <!-- Trigger button -->
                                <button @click="open = true"
                                    class="hover:bg-green-700 px-3 py-1 mt-2 text-white bg-green-600 rounded">
                                    Mark as Paid
                                </button>

                                <!-- Confirmation Modal -->
                                <div x-show="open" x-cloak
                                    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                                    <div class="w-full max-w-md p-6 text-center bg-white rounded shadow-lg">
                                        <h2 class="mb-4 text-lg font-semibold">Confirm Payment</h2>
                                        <p class="mb-6">Are you sure you want to mark <strong>Order #{{ $order->id }}</strong> as paid?</p>
                                        <div class="flex justify-center gap-4">
                                            <!-- Confirm Button -->
                                            <form method="POST" action="{{ route('orders.markAsPaid', $order) }}">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit"
                                                    class="hover:bg-green-700 px-4 py-2 text-white bg-green-600 rounded">
                                                    Yes, Mark as Paid
                                                </button>
                                            </form>
                                            <!-- Cancel Button -->
                                            <button @click="open = false"
                                                class="hover:bg-gray-400 px-4 py-2 text-gray-800 bg-gray-300 rounded">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            <!-- </div> -->
        </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</body>
</html>