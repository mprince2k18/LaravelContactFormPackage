<?php
namespace MyVendor\contactform;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider 
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'contactform');


        $this->publishes([
        __DIR__.'/resources/views' => base_path('resources/views/mprince2k16'),
    ], 'views');

    }
    
    public function register()
    {
        $this->app->register(MyVendor\contactform\ContactFormServiceProvider::class);
    }

}