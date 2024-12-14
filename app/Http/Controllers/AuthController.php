<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Log;


class AuthController extends Controller
{
    // Registracija novog korisnika
    public function register(Request $request)
    {
        // Validacija podataka sa custom porukama
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Proveri da li podaci dolaze ispravno
        Log::info('Registracija podaci:', $data);

        // Kreiraj korisnika
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'customer', // = ako je potrebno
        ]);

        // Prijava korisnika automacki nakon prijave
        Auth::login($user);

        // Preusmeri na homepage ili neku drugu stranicu
        return redirect()->route('home');
    }
    

    // Prijava korisnika
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    // Odjava korisnika
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
