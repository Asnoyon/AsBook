<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Location;
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
        view()->composer('*', function($view) {
            $view->with('categories', Category::all());
        });

        view()->composer('*', function($view) {
            $view->with('locations', Location::all());
        });
    }
}
