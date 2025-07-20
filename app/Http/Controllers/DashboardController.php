<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\Earning;


class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $totalOrders = Order::count();
        $pendingOrders = Order::where('status', 'pending')->count();
        $totalEarnings = Earning::sum('amount');

        return view('posdashboard', compact(
            'totalUsers',
            'totalProducts',
            'totalCategories',
            'totalOrders',
            'pendingOrders',
            'totalEarnings'
        ));
    }
}
