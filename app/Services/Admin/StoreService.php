<?php

namespace App\Services\Admin;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class StoreService
{
    /**
     * Kreiranje nove prodavnice
     */
    public function createStore(Request $request): Store
    {
        $data = $request->only([
            'name', 'description', 'location', 'user_id', 
            'status', 'type', 'url', 'visibility', 'additional_info'
        ]);

        // Provera i čuvanje loga ako postoji
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // Kreiranje prodavnice
        return Store::create($data);
    }

   
    public function getFilteredStores(Request $request)
    {
        $query = Store::query();
    
        if ($request->filled('name')) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }
    
        if ($request->filled('location')) {
            $query->where('location', 'LIKE', '%' . $request->location . '%');
        }
    
        // Paginacija sa 10 rezultata po strani
        $stores = $query->paginate(10);
    
        // Očuvanje parametara pretrage u URL-u
        $stores->appends($request->all());
    
        return $stores;
    }
    

    }
    





