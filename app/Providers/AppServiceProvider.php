<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
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
        View::composer(['admin.*','*'], function ($view){
            $view->with('category', \App\Models\Category::all());
            // promo
            $view->with('promo', \App\Models\Promo::all());
           // all product
            $view->with('product', \App\Models\Product::all());


            // do this: update date_debuut and date_fin in product table when date_fin is passed
            $product = \App\Models\Product::all();
            foreach($product as $product_){
                if($product_->date_fin < date('Y-m-d')){
                    $product_->prix_promo = 0;
                    $product_->date_debut = null;
                    $product_->date_fin = null;
                    $product_->update();
                }
            }

         });


    }
}
