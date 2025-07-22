<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css">
    <title>PointOfSale</title>
</head>
<body>
    <div class="bg-wrapper bg-blue-200/50">
        <div class="bg-image"></div>
    </div>

    <x-navbar />
    <x-sidepanel />

    <div class="sm:ml-64 mt-14 p-8">
        <h1 class="mb-4 text-2xl font-bold ">Earnings</h1> 

        <div class="flex justify-end">
            <form method="GET" class="mb-4">
                <select name="filter" onchange="this.form.submit()" class="px-8 py-2 bg-gray-700/50 text-white font-semibold rounded-md border border-gray-600/50 shadow-lg">
                    <option value="">All Time</option>
                    <option value="daily" {{ request('filter') == 'daily' ? 'selected' : '' }}>Daily</option>
                    <option value="weekly" {{ request('filter') == 'weekly' ? 'selected' : '' }}>Weekly</option>
                    <option value="monthly" {{ request('filter') == 'monthly' ? 'selected' : '' }}>Monthly</option>
                    <option value="yearly" {{ request('filter') == 'yearly' ? 'selected' : '' }}>Yearly</option>
                </select>
            </form>
        </div>

        <p class="border border-gray-400/50 bg-white px-8 py-5 border text-center rounded-md mx-auto w-full">
            Total Earnings:  <strong class="text-blue-600 text-lg">₱{{ number_format($total, decimals: 2) }}</strong>
        </p>

        <table class="border border-gray-400/50 rounded-md bg-white mt-4 w-full text-center border table-auto overflow-hidden">
            <thead>
                <tr>
                    <th class="p-2 border">Order ID</th>
                    <th class="p-2 border">Amount</th>
                    <th class="p-2 border">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($earnings as $earning)
                    <tr>
                        <td class="p-2 border">{{ $earning->order_id }}</td>
                        <td class="p-2 border">₱{{ number_format($earning->amount, 2) }}</td>
                        <td class="p-2 border">{{ $earning->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>
</html>
