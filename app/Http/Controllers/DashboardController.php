<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Store;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // Prikazivanje dashboard-a za korisnika
    public function index()
    {
        // Ako je korisnik admin, prikazujemo sve prodavnice i proizvode
        if (Gate::allows('admin-access')) {
            $stores = Store::all(); // Povlačenje svih prodavnica
            $products = Product::all(); // Povlačenje svih proizvoda
            return view('admin.dashboard', compact('stores', 'products')); // Admin dashboard
        }

        

        // Ako korisnik nema pristup, abort sa greškom 403
        abort(403, 'You are not authorized to view this page');
    }
}
