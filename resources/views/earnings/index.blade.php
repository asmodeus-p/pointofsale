<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Earnings</h2>
    </x-slot>

    <div class="p-4 bg-white rounded shadow">
        <div class="mb-4">
            <strong>Total Earnings:</strong> ₱{{ number_format($total, 2) }}
        </div>

        <table class="min-w-full text-sm border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2">Date</th>
                    <th class="px-4 py-2">User</th>
                    <th class="px-4 py-2">Source</th>
                    <th class="px-4 py-2 text-right">Amount (₱)</th>
                </tr>
            </thead>
            <tbody>
                @forelse($earnings as $earning)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $earning->created_at->format('Y-m-d') }}</td>
                        <td class="px-4 py-2">{{ $earning->user->name }}</td>
                        <td class="px-4 py-2">{{ $earning->source }}</td>
                        <td class="px-4 py-2 text-right">{{ number_format($earning->amount, 2) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-2 text-center">No earnings yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-4">
            {{ $earnings->links() }}
        </div>
    </div>
</x-app-layout>
