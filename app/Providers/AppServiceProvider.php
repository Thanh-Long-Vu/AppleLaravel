<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('userPage/layouts/menu', function ($view) {
            $categories = Category::limit(5)->get();
            $view->with(['categories' => $categories]);
        });
        view()->composer('userPage/layouts/search', function ($view) {
            $categories = Category::all();
            $view->with(['categories' => $categories]);
        });
    }
}
