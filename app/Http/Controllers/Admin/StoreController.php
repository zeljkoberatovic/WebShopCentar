<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Store;
use Illuminate\Http\Request;

use App\Services\Admin\StoreService;

class StoreController extends Controller
{
    protected $storeService;

    public function __construct(StoreService $storeService)
    {
        $this->middleware('auth'); // Moraš biti prijavljen
        $this->storeService = $storeService;
    }

    public function create()
    {
        $users = User::all();
        return view('admin.stores.create', compact('users'));
    }

    public function index(Request $request)
    {
       
        // Pozivamo metodu za filtriranje
        $stores = $this->storeService->getFilteredStores($request);

        return view('admin.stores.index', compact('stores'));
    }
    

    public function show(Store $store)
{
    
    return view('admin.stores.show', compact('store'));
}

public function edit(Store $store)
{
    
    return view('admin.stores.edit', compact('store'));
}

public function update(Request $request, Store $store)
    {
        // Validacija podataka
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'type' => 'required|in:physical,online',
            'status' => 'nullable|in:active,inactive',
            'visibility' => 'nullable|in:private,public,hidden',
            'url' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        // Ažuriranje podataka u bazi
        $store->update($validatedData);

        // Redirektovanje nazad sa porukom o uspehu
        return redirect()->route('admin.stores.show', $store->id)->with('success', 'Prodavnica je uspešno ažurirana.');
    }


public function destroy(Store $store)
    {
        $store->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Prodavnica je uspjesno obrisana!');
    }





    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'nullable|string',
            'user_id' => 'required|exists:users,id',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'type' => 'required|in:physical,online',
            'url' => 'required|unique:stores,url',
            'visibility' => 'required|in:private,public,hidden',
            'additional_info' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        try {
            // Koristi StoreService za kreiranje prodavnice
            $store = $this->storeService->createStore($request);

            return redirect()->route('admin.dashboard')->with('success', 'Prodavnica je uspešno kreirana!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Došlo je do greške prilikom kreiranja prodavnice.');
        }
    }

    

}
