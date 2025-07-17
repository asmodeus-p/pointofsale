@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4 text-xl font-bold">Earnings</h2>

    <form method="GET" class="mb-4">
        <select name="filter" onchange="this.form.submit()">
            <option value="">All Time</option>
            <option value="daily" {{ request('filter') == 'daily' ? 'selected' : '' }}>Daily</option>
            <option value="weekly" {{ request('filter') == 'weekly' ? 'selected' : '' }}>Weekly</option>
            <option value="monthly" {{ request('filter') == 'monthly' ? 'selected' : '' }}>Monthly</option>
            <option value="yearly" {{ request('filter') == 'yearly' ? 'selected' : '' }}>Yearly</option>
        </select>
    </form>

    <p class="mb-4">Total Earnings: <strong>₱{{ number_format($total, 2) }}</strong></p>

    <table class="w-full border table-auto">
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
@endsection
