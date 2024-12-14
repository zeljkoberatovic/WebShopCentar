<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Features;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\TwoFactorAuthenticationController;

// Rute za prijavu, registraciju, logout
Route::get('/login', function () { return view('auth.login'); })->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', function () { return view('auth.register'); })->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute za resetovanje lozinke
Route::get('/forgot-password', function () { return view('auth.forgot-password'); })->name('password.request');
Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLinkEmail']);
Route::get('/reset-password/{token}', function ($token) { return view('auth.reset-password', ['token' => $token]); })->name('password.reset');
Route::post('/reset-password', [PasswordResetController::class, 'reset']);

// Rute za Two-Factor Authentication
Route::middleware(['auth'])->group(function () {
    Route::post('/user/two-factor-authentication', [TwoFactorAuthenticationController::class, 'enable']);
    Route::delete('/user/two-factor-authentication', [TwoFactorAuthenticationController::class, 'disable']);
    Route::post('/user/confirmed-two-factor-authentication', [TwoFactorAuthenticationController::class, 'confirm']);
});


Route::middleware(['auth'])->group(function () {
    if (Features::enabled(Features::twoFactorAuthentication())) {
        Route::post('/user/two-factor-authentication', [TwoFactorAuthenticationController::class, 'enable']);
        Route::delete('/user/two-factor-authentication', [TwoFactorAuthenticationController::class, 'disable']);
    }
});


// Ruta za home stranu
Route::get('/', [HomeController::class, 'index'])->name('home');


// Ruta za prodavnice
Route::get('/stores', [StoreController::class, 'stores'])->name('stores');

// Ostale statičke stranice
Route::view('/offers', 'pages.offers')->name('offers');
Route::view('/about_us', 'pages.about_us')->name('about_us');

// Blog kontroler
Route::resource('blog', BlogController::class);



