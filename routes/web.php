<?php

use App\Http\Controllers\BlogControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\BlogController;

// Ruta za home stranu
Route::get('/', [HomeController::class, 'index'])->name('home'); // Ova ruta ide ka HomeControlleru

// Ruta za prodavnice
Route::get('/stores', [StoreController::class, 'stores'])->name('stores'); // Ova ruta ide ka StoreControlleru

// Ostale statičke stranice
Route::view('/offers', 'pages.offers')->name('offers');
Route::view('/about_us', 'pages.about_us')->name('about_us');

// Blog kontroler
Route::resource('blog', BlogController::class);





