<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    // Prikaz proizvoda u prodavnici
    public function index(Store $store)
    {
        // Provera da li korisnik ima pristup ovoj prodavnici
        if (Gate::allows('manage-store', $store)) {
            $products = $store->products; // Svi proizvodi u prodavnici
            return view('products.index', compact('store', 'products'));
        }

        abort(403, 'You do not have permission to view these products');
    }

    // Prikaz forme za dodavanje proizvoda
    public function create(Store $store)
    {
        if (Gate::allows('manage-store', $store)) {
            return view('products.create', compact('store'));
        }

        abort(403, 'You do not have permission to add products to this store');
    }

    // Spremanje novog proizvoda
    public function store(Request $request, Store $store)
    {
        // Validacija unosa
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0',
        ]);

        if (Gate::allows('manage-store', $store)) {
            // Dodavanje novog proizvoda
            $product = new Product($request->all());
            $product->store_id = $store->id; // Povezivanje proizvoda sa prodavnicom
            $product->save();

            return redirect()->route('products.index', $store)->with('success', 'Product created successfully!');
        }

        abort(403, 'You do not have permission to create a product in this store');
    }

    // Prikazivanje proizvoda
    public function show(Store $store, Product $product)
    {
        if (Gate::allows('manage-store', $store)) {
            return view('products.show', compact('product'));
        }

        abort(403, 'You do not have permission to view this product');
    }

    // Prikaz forme za uređivanje proizvoda
    public function edit(Store $store, Product $product)
    {
        if (Gate::allows('manage-store', $store)) {
            return view('products.edit', compact('product'));
        }

        abort(403, 'You do not have permission to edit this product');
    }

    // Ažuriranje proizvoda
    public function update(Request $request, Store $store, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0',
        ]);

        if (Gate::allows('manage-store', $store)) {
            $product->update($request->all());

            return redirect()->route('products.index', $store)->with('success', 'Product updated successfully!');
        }

        abort(403, 'You do not have permission to update this product');
    }

    // Brisanje proizvoda
    public function destroy(Store $store, Product $product)
    {
        if (Gate::allows('manage-store', $store)) {
            $product->delete();

            return redirect()->route('products.index', $store)->with('success', 'Product deleted successfully!');
        }

        abort(403, 'You do not have permission to delete this product');
    }
}

