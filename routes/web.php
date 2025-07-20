<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\EarningController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

// Redirect root to login
Route::get('/', fn() => redirect('/login'));

Route::controller(LoginRegisterController::class)->group(function () {

    /* -------------   GUEST‑ONLY ROUTES   ------------- */
    Route::middleware('guest')->group(function () {
        Route::get('/register',      'register')->name('register');
        Route::post('/store',        'store')->name('store');
        Route::get('/login',         'login')->name('login');
        Route::post('/authenticate', 'authenticate')->name('authenticate');
    });

    /* -------------   AUTH‑ONLY ROUTES   ------------- */
    Route::middleware('auth')->group(function () {
        Route::get('/home',   'home')->name('home');     // or /dashboard
        Route::post('/logout', 'logout')->name('logout');   // ← must be POST with @csrf
    });
});

// Authenticated Routes
Route::middleware(['auth', 'verified', 'role:admin,user'])->group(function () {

    // Cart Routes (must be placed before increment/decrement custom POST routes)
    Route::resource('cart', CartController::class);

    // Custom increment/decrement must go AFTER resource so it doesn't override PUT
    Route::post('/cart/{id}/increment', [CartController::class, 'incrementQuantity'])->name('cart.increment');
    Route::post('/cart/{id}/decrement', [CartController::class, 'decrementQuantity'])->name('cart.decrement');

    // Customers and admins can view products, categories, and orders
    Route::get('/products',   [ProductController::class, 'index'])->name('products.index');
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/my-orders',  [OrderController::class, 'index'])->name('orders.index');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

    // GET routes for place order pages
    Route::get('/place-order/cart', [OrderController::class, 'showCartOrderForm'])->name('order.cart.form');
    Route::get('/place-order/product/{product}', [OrderController::class, 'showSingleOrderForm'])->name('order.single.form');

    // POST routes for buy now
    Route::post('/buy-now-cart', [OrderController::class, 'buyNowCart'])->name('buy.now.cart');
    Route::post('/buy-now/{product}', [OrderController::class, 'buyNowSingle'])->name('buy.now.single');

    // PUT 
    Route::put('/cart/{id}', [CartController::class, 'update'])->name('cart.update');


    // Admin-only: manage everything else
    Route::middleware('role:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('customers', CustomerController::class)->only(['index', 'create', 'store']);
        Route::resource('products', ProductController::class)->except('index', 'show');
        Route::resource('categories', CategoryController::class)->except('index');
        Route::resource('admins', AdminController::class)->only(['index', 'create']);
        Route::patch('/admins/{user}/demote', [AdminController::class, 'demote'])->name('admins.demote');
        Route::get('/earnings', [EarningController::class, 'index'])->name('earnings.index');
    });
});



Route::get('/greeting', function () {
    return 'Hello World';
});


//verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// 👋 Test route
Route::get('/greeting', fn() => 'Hello World');

Route::fallback(function () {
    return response('Page not found', 404);
});
