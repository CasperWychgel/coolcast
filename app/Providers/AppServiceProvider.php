<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Location;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials._nav', function ($view) {
            $locations = Location::all();
            $view->with('locations', $locations);
        });
    }
}
