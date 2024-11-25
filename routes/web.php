<?php

use App\Http\Controllers\BlogControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\BlogController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/stores', [StoreController::class, 'index'])->name('stores.index');
Route::view('/offers', 'pages.offers')->name('offers');
Route::view('/about_us', 'pages.about_us')->name('about_us');

Route::resource('blog', BlogController::class);





