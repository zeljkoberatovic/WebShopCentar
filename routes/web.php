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


Route::middleware(['auth'])->get('/home', function() {
    return view('home');
})->name('home');

// Ruta za home stranu
Route::get('/', [HomeController::class, 'index'])->name('home');


// Ruta za prodavnice
Route::get('/stores', [StoreController::class, 'stores'])->name('stores');

// Ostale statičke stranice
Route::view('/offers', 'pages.offers')->name('offers');
Route::view('/about_us', 'pages.about_us')->name('about_us');

// Blog kontroler
Route::resource('blog', BlogController::class);



