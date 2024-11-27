<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class HomeController extends Controller
{
    public function index(){
        
        $stores = Store::orderBy('created_at', 'desc')->take(10)->get(); //Zadnje dodate prodavnice
        return view('pages.home', compact('stores'));

    }
}
