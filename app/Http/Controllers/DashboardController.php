<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class DashboardController extends Controller
{
    public function index()
{
    $products = Product::where('is_hidden', false)->get(); // only show non-hidden products
    return view('posdashboard', compact('products'));
}
}

