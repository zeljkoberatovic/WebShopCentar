<?php

use App\Http\Controllers\BlogControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\BlogController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/stores', [StoreController::class, 'index'])->name('stores.index');
Route::view('/offers', 'pages.offers')->name('offers');

Route::resource('blog', BlogController::class);





