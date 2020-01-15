<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\Auth;
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
                if (Auth::check()) {
                    $user = Auth::user();
                    $locations = $user->locations()->get();
                    $view->with('locations', $locations);
                } else {
                    $locations = [];
                    $view->with('locations', $locations);
                }
            });
        //}
    }
}
