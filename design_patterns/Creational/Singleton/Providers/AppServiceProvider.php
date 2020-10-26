<?php

namespace App\Providers;

use App\Channel;
use App\Singleton\Contracts\AnotherConnection;
use App\Singleton\LaravelSingleton;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    //this property exist in laravel 5.8 version this is 5.5 version
//    public $singletons = [
//        AnotherConnection::class => LaravelSingleton::class,
////        LaravelSingleton::class => LaravelSingleton::class,
//    ];
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::composer('*', function ($view) {
            $view->with('channels', \App\Channel::all());
        });

        \Validator::extend('spamfree', 'App\Rules\SpamFree@passes');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //this is for 5.5 version singleton
        $this->app->singleton(LaravelSingleton::class, function ($app) {
            return new LaravelSingleton();
        });

        if ($this->app->isLocal()) {
            $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
        }
    }
}
