<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // uzimamo trenutnog korisnika
        return view('user.dashboard', compact('user')); // saljemo ga u Blade
    }
}
