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

    // Filtriranje po imenu prodavnice, ako postoji parametar 'name'
    if ($request->has('name') && $request->name != '') {
        $query->where('name', 'like', '%' . $request->name . '%');
    }

    // Filtriranje po lokaciji, ako postoji parametar 'location'
    if ($request->has('location') && $request->location != '') {
        $query->where('location', 'like', '%' . $request->location . '%');
    }

    // Paginacija
    return $query->paginate(10);  // Paginacija po 10 prodavnica po stranici
}



}
