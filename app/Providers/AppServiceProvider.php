<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!is_link(public_path('storage'))) {
            Artisan::call('storage:link');
        }

        View::composer('*', function ($view) {
            if (Auth::check()) {
                $orderCount = Auth::user()->role === 'admin'
                    ? Order::where('status', 'pending')->count() // all pending orders
                    : Order::where('user_id', Auth::id())->where('status', 'pending')->count(); // user's pending orders

                $view->with('orderCount', $orderCount);
            }
        });
    }
}
