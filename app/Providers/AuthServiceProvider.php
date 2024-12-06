<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Store;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Registracija servisa (ako je potrebno)
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Gate::define('admin-access', function ($user) {
            return $user->isAdmin();
        });
    
        Gate::define('manage-store', function ($user, $store) {
            return $user->isAdmin() || ($user->isUser() && $user->id === $store->user_id);
        });
    }
}

