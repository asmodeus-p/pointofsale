<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Earning;
use Carbon\Carbon;

class EarningController extends Controller
{
    public function index(Request $request)
    {
        $query = Earning::with('order');

        // Optional filtering
        if ($filter = $request->input('filter')) {
            $now = Carbon::now();

            switch ($filter) {
                case 'daily':
                    $query->whereDate('created_at', $now->toDateString());
                    break;
                case 'weekly':
                    $query->whereBetween('created_at', [$now->startOfWeek(), $now->endOfWeek()]);
                    break;
                case 'monthly':
                    $query->whereMonth('created_at', $now->month)->whereYear('created_at', $now->year);
                    break;
                case 'yearly':
                    $query->whereYear('created_at', $now->year);
                    break;
            }
        }

        $earnings = $query->latest()->get();
        $total = $earnings->sum('amount');

        return view('admin.earnings.index', compact('earnings', 'total'));
    }
}
