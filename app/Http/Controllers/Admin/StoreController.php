<?php

namespace App\Http\Controllers\Admin;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    // Konstruktor za middleware
    public function __construct()
    {
        $this->middleware('auth'); // Moraš biti prijavljen kao admin
    }

    // Prikazivanje forme za kreiranje nove prodavnice
    public function create()
    {
        $users = User::all();
        return view('admin.stores.create', compact('users'));
    }

    // Spremanje nove prodavnice u bazu
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'nullable|string', // Može biti prazno
            'user_id' => 'required|exists:users,id',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|in:physical,online',
            'url' => 'required|unique:stores,url',
            'visibility' => 'required|in:private,public,hidden',
            'additional_info' => 'nullable|string',
            'status' => 'required|in:active,inactive', // Validacija za status
        ]);

        try {
            $store = new Store([
                'name' => $request->name,
                'description' => $request->description,
                'user_id' => $request->user_id, // Vlasnik prodavnice
                'location' => $request->location,
                'status' => $request->status, // Dodajte status
                'type' => $request->type,
                'url' => $request->url,
                'visibility' => $request->visibility,
                'additional_info' => $request->additional_info,
            ]);

            if ($request->hasFile('logo')) {
                $path = $request->file('logo')->store('logos', 'public');
                $store->logo = $path;
            }

            $store->save();

            return redirect()->route('admin.stores.index')->with('success', 'Prodavnica je uspešno kreirana!');
        } catch (\Exception $e) {
            // Logujemo grešku
        \Log::error('Greška pri kreiranju prodavnice: ' . $e->getMessage());
        
            return redirect()->back()->with('error', 'Došlo je do greške prilikom kreiranja prodavnice. Pokušajte ponovo.');
        }
    }

    // Prikazivanje svih prodavnica
    public function index()
    {
        $stores = Store::with('owner')->get(); // Učitava vlasnika prodavnice
        return view('admin.stores.index', compact('stores'));
    }
}
