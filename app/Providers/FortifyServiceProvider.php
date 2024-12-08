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

use Laravel\Fortify\Contracts\LoginViewResponse;
use Laravel\Fortify\Contracts\LoginViewResponse as LoginViewResponseContract;

class FortifyServiceProvider extends ServiceProvider
{
    
    public function boot(): void
{
    // Konfiguracije za Fortify akcije
    Fortify::createUsersUsing(CreateNewUser::class);
    Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
    Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
    Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

    // Rate Limiting za prijavu i two-factor autentifikaciju
    RateLimiter::for('login', function (Request $request) {
        $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

        return Limit::perMinute(5)->by($throttleKey);
    });

    RateLimiter::for('two-factor', function (Request $request) {
        return Limit::perMinute(5)->by($request->session()->get('login.id'));
    });

    // Konfigurisanje pogleda za Fortify
    Fortify::loginView(function () {
        return view('auth.login'); // Pogled za prijavu
    });

    Fortify::registerView(function () {
        return view('auth.register'); // Pogled za registraciju
    });


    
    Fortify::requestPasswordResetLinkView(function () {
        return view('auth.passwords.email'); // Pogled za zahtev za reset lozinke
    });

    Fortify::resetPasswordView(function ($request) {
        return view('auth.passwords.reset', ['request' => $request]); // Pogled za reset lozinke
    });

    Fortify::verifyEmailView(function () {
        return view('auth.verify-email'); // Pogled za verifikaciju emaila
    });
  }

  
 
}
