<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\View;
use App\Models\Store;
use App\Models\User;

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
        Fortify::loginView(function () {
            return view('auth.login');
        });
    
        Fortify::registerView(function () {
            return view('auth.register');
        });
        
        View::composer('admin.stores.index', function ($view) {
            $view->with('stores', Store::all());
        });
       

        View::composer('admin.stores.create', function ($view) {
            $view->with('users', User::all());
        });
    }
}
