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
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


Route::get('/send-test-email', function () {
    Mail::raw('This is a test email from Gmail SMTP.', function ($message) {
        $message->to('marianemacalinao.hs@gmail.com')
                ->subject('Test Email');
    });

    return 'Test email sent!';
});

// Redirect root to login
Route::get('/', fn() => redirect('/login'));

Route::controller(LoginRegisterController::class)->group(function () {

    /* -------------   GUEST‑ONLY ROUTES   ------------- */
    Route::middleware('guest')->group(function () {
        Route::get('/register',      'register')->name('register');
        Route::post('/store',        'store')->name('store');
        Route::get('/login',         'login')->name('login');
        Route::post('/authenticate', 'authenticate')->name('authenticate');

        // Forgot password routes
        Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
        Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

        // Reset passwrod routes
        Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
        Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
    });

    /* -------------   AUTH‑ONLY ROUTES   ------------- */
    Route::middleware('auth')->group(function () {
        Route::get('/home',   'home')->name('home');     // or /dashboard
        Route::post('/logout', 'logout')->name('logout');   // ← must be POST with @csrf
    });
});

// Authenticated Routes
Route::middleware(['auth', 'verified', 'role:admin,user'])->group(function () {

    Route::resource('cart', CartController::class);

    Route::post('/cart/{id}/increment', [CartController::class, 'incrementQuantity'])->name('cart.increment');
    Route::post('/cart/{id}/decrement', [CartController::class, 'decrementQuantity'])->name('cart.decrement');

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/my-orders', [OrderController::class, 'index'])->name('orders.index');

    Route::get('/place-order/cart', [OrderController::class, 'showCartOrderForm'])->name('order.cart.form');
    Route::get('/place-order/product/{product}', [OrderController::class, 'showSingleOrderForm'])->name('order.single.form');

    Route::post('/buy-now-cart', [OrderController::class, 'buyNowCart'])->name('buy.now.cart');
    Route::post('/buy-now/{product}', [OrderController::class, 'buyNowSingle'])->name('buy.now.single');

    Route::put('/cart/{id}', [CartController::class, 'update'])->name('cart.update');

    // Edit user info routes
    Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/update', [UserController::class, 'update'])->name('user.update');

    // PUT this BEFORE /products/{product} to avoid route collision
    Route::middleware('role:admin')->group(function () {
        Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
        Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
        Route::post('/products', [ProductController::class, 'store'])->name('products.store');
        Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    });

    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

    Route::middleware('role:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('customers', CustomerController::class)->only(['index', 'create', 'store']);
        Route::patch('/customers/{user}/promote', [CustomerController::class, 'promoteToAdmin'])->name('customers.promote');

        Route::resource('categories', CategoryController::class)->except('index');

        Route::resource('admins', AdminController::class)->only(['index', 'create']);
        Route::patch('/admins/{user}/demote', [AdminController::class, 'demote'])->name('admins.demote');

        Route::get('/earnings', [EarningController::class, 'index'])->name('earnings.index');

        Route::patch('/orders/{order}/mark-paid', [OrderController::class, 'markAsPaid'])->name('orders.markAsPaid');
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


Route::get('/greeting', fn() => 'Hello World');

Route::fallback(function () {
    return response('Page not found', 404);
});
