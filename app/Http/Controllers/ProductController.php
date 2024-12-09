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
        
    }
}

