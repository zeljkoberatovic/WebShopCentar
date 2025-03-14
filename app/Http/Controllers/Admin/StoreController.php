<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

    public function index(Request $request)
{
     // Uzmi sve prodavnice
     $stores = Store::all();

     // Prosledi podatke o prodavnicama u view
     return view('admin.stores.index', compact('stores'));
    
}

}
