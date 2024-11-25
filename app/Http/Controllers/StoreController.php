<?php

namespace App\Http\Controllers;

use App\Models\Store;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index() {

        $stores = Store::all(); // Povlačenje svih prodavnica
        return view('pages.stores', compact('stores'));
    }
}
