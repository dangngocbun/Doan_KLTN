<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Cart;
use Auth;

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
         view()->composer('*', function ($view) {
             
             $view->with('cates', Category::all());
        
            // $view -> with('products', Product::all());

            // $view -> with('banners', Banner::all());
            // $view -> with('users', User::all());
        });
    }
}
