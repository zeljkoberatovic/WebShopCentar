<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/stores', [StoreController::class, 'index'])->name('stores.index');
Route::view('/offers', 'pages.offers')->name('offers');




