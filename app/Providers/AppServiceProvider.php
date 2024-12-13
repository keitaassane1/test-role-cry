<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;



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
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->role->name == 'admin';
        });

        Blade::if('superviseur', function () {
            return auth()->check() && auth()->user()->role->name == 'superviseur';
        });

        Blade::if('agent', function () {
            return auth()->check() && auth()->user()->role->name == 'agent';
        });

        Blade::if('consult', function () {
            return auth()->check() && auth()->user()->role->name == 'consult';
        });

    }
}
