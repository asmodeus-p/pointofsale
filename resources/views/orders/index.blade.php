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

        <div class="flex">
            
            <div class="w-[255px] hidden md:flex md:flex-col transition-transform" aria-label="Sidebar">
                <x-sidepanel />
            </div>

        <div class="w-max px-4">
            <h2 class="mb-4 text-xl font-semibold">My Orders</h2>

                @foreach($orders as $order)
                    <div class="p-4 mb-4 bg-white rounded shadow">
                        <p><strong>Order #{{ $order->id }}</strong> - Status: {{ $order->status }}</p>
                        <ul class="ml-4 list-disc list-inside">
                            @foreach ($order->items as $item)
                                <li>{{ $item->product->name }} - {{ $item->quantity }} x ₱{{ $item->price_at_purchase }}</li>
                            @endforeach
                        </ul>
                        <p class="mt-2 font-bold">Total: ₱{{ $order->total_price }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>