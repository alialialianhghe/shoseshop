<?php

namespace App\Providers;
use App\Models\Giohang;
use Illuminate\Support\ServiceProvider;
use Session;
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
        view()->composer('layout.headerHome', function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Giohang($oldCart);
                $view->with([
                    'cart'=>Session::get('cart'),
                    'product_cart'=>$cart->items,
                    'totalPrice'=>$cart->totalPrice,
                    'totalQty'=>$cart->totalQty,
                    'qty_cart'=>$cart->qty_cart
                ]);
            }
        });

        view()->composer('home.page_cart', function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Giohang($oldCart);
                $view->with([
                    'cart'=>Session::get('cart'),
                    'product_cart'=>$cart->items,
                    'totalPrice'=>$cart->totalPrice,
                    'totalQty'=>$cart->totalQty,
                    'customer_cart'=>$cart->customer_cart,
                    'qty_cart'=>$cart->qty_cart

                ]);
            }
        });

        view()->composer('home.page_checkout', function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Giohang($oldCart);
                $view->with([
                    'cart'=>Session::get('cart'),
                    'product_cart'=>$cart->items,
                    'totalPrice'=>$cart->totalPrice,
                    'totalQty'=>$cart->totalQty,
                    'customer_cart'=>$cart->customer_cart,
                    'qty_cart'=>$cart->qty_cart
                ]);
            }
        });
    }
}
