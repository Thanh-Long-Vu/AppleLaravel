<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductType;
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
        view()->composer('userPage/layouts/footer', function ($view) {
            $productSales = Product::where([['discount','>=',70],['is_hot','=',0]])->orderby('discount','desc')->limit(3)->get();
            $productHots = Product::where([['discount','>=',50],['is_hot','=',1]])->orderby('discount','desc')->limit(3)->get();
            $productTypeRates = ProductType::where('total_rating','>=','4,5')->limit(3)->get();
            $view->with(['productSales' => $productSales,'productHots' => $productHots,'productTypeRates'=> $productTypeRates]);
        });
    }
}
