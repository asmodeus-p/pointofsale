<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Earning;

class EarningController extends Controller
{
    public function index()
    {
        $earnings = Earning::with('user')->latest()->paginate(10);
        $total = Earning::sum('amount');

        return view('earnings.index', compact('earnings', 'total'));
    }
}
