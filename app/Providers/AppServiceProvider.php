<?php

namespace App\Providers;

use App\Models\Order;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(125);

        view()->composer('admin.layouts.sidebar', function ($view) {
            $view->with('total_order_unverified', Order::whereStatus('unverified')->count());
        });
    }
}
