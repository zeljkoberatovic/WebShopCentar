<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    // Prikaz stranice sa prodavnicama
    public function stores()
    {
        $stores = Store::all(); // Povlačenje svih prodavnica
        return view('pages.stores', compact('stores')); // Ispravan prikaz za stores.blade.php
    }

   
    }

