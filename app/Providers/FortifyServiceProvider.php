<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;



class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       // Akcije za registraciju, reset lozinke, itd.
       Fortify::createUsersUsing(CreateNewUser::class);
       Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
       Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
       Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

       // Prilagođeni prikazi
       Fortify::loginView(fn () => view('auth.login'));
       Fortify::registerView(fn () => view('auth.register'));
       Fortify::requestPasswordResetLinkView(fn () => view('auth.forgot-password'));
       Fortify::resetPasswordView(fn ($request) => view('auth.reset-password', ['request' => $request]));

       // Rate limiting
       RateLimiter::for('login', function (Request $request) {
           $email = (string) $request->email;
           return Limit::perMinute(5)->by($email . $request->ip());
       });
   }
        
}

