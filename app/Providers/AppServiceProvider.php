<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use App\Models\User;


use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Support\Facades\View;

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
        View::composer('*', function ($view) {
            $categories = Category::all();
            $view->with('categories', $categories);
        });
        View::composer('*', function ($view) {
            $products = Product::all();
            $view->with('products', $products);
        });
        View::composer('*', function ($view) {
            $carts = Cart::all();
            $view->with('carts', $carts);
        });

        // Should return TRUE or FALSE
        Gate::define('admin_area', function(User $user) {
            return $user->is_admin == 1;
        });
    
    }
}
