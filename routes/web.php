<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

use Laravel\Fortify\Features;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Ruta za home stranu
Route::get('/', [HomeController::class, 'index'])->name('home');

// Fortify rute za login i register
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->middleware(['guest'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware(['guest']);
Route::get('/register', [RegisteredUserController::class, 'create'])->middleware(['guest'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->middleware(['guest']);

// Dashboard za autorizovane korisnike
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Rute za admina
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('stores', StoreController::class);
});

// Rute za korisnika
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::resource('stores.products', ProductController::class);
});

// Ruta za prodavnice
Route::get('/stores', [StoreController::class, 'stores'])->name('stores');

// Ostale statičke stranice
Route::view('/offers', 'pages.offers')->name('offers');
Route::view('/about_us', 'pages.about_us')->name('about_us');

// Blog kontroler
Route::resource('blog', BlogController::class);



