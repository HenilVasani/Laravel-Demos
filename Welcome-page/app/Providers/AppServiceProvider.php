<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Seller;
use App\Observers\SellerObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Seller::observe(SellerObserver::class);
    }
}
