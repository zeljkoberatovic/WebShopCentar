<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class StoreController extends Controller
{
    // Prikaz stranice sa prodavnicama
    public function stores()
    {
        $stores = Store::all(); // Povlačenje svih prodavnica
        return view('pages.stores', compact('stores')); // Ispravan prikaz za stores.blade.php
    }

   
    }

