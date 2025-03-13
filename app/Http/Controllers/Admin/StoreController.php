<?php

namespace App\Http\Controllers\Admin;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class StoreController extends Controller
{
    // Konstruktor za middleware
    public function __construct()
    {
        $this->middleware('auth'); // Moraš biti prijavljen
    }

    // Prikazivanje forme za kreiranje nove prodavnice
    public function create()
    {
        $users = User::all();
        return view('admin.stores.create', compact('users'));
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'location' => 'nullable|string',
        'user_id' => 'required|exists:users,id',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'type' => 'required|in:physical,online',
        'url' => 'required|unique:stores,url',
        'visibility' => 'required|in:private,public,hidden',
        'additional_info' => 'nullable|string',
        'status' => 'required|in:active,inactive',
    ]);

    try {
        // Kreiraj novi Store objekat
        $store = new Store([
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'user_id' => $request->user_id, // Vlasnik prodavnice
            'status' => $request->status,
            'type' => $request->type,
            'url' => $request->url,
            'visibility' => $request->visibility,
            'additional_info' => $request->additional_info,
        ]);

        // Provera i čuvanje loga ako postoji
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('logos', 'public');
            $store->logo = $path;
        }

        // Spremanje u bazu
        $store->save();

        // Redirektuj sa uspešnom porukom
        return redirect()->route('admin.stores.index')->with('success', 'Prodavnica je uspešno kreirana!');
    } catch (\Exception $e) {
        // Loguj grešku
        \Log::error('Greška pri kreiranju prodavnice: ' . $e->getMessage());
        
        // Vratiti grešku korisniku
        return redirect()->back()->with('error', 'Došlo je do greške prilikom kreiranja prodavnice. Pokušajte ponovo.');
    }
    }
}
