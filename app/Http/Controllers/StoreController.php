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

    // Admin akcija - samo za administratore
    public function adminActions()
    {
        // Proveravamo da li korisnik ima pristup admin sekciji
        if (Gate::allows('admin-access')) {
            // Logika za admin akcije
            return view('admin.dashboard');
        } else {
            abort(403, 'Access Denied');
        }
    }

    // Akcije za vlasnike prodavnica
    public function manageStore(Store $store)
    {
        // Proveravamo da li korisnik može da upravlja ovom prodavnicom
        if (Gate::allows('manage-store', $store)) {
            // Logika za upravljanje prodavnicom
            return view('store.manage', compact('store'));
        } else {
            abort(403, 'Access Denied');
        }
    }
}
