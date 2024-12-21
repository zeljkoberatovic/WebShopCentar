<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PasswordResetController extends Controller
{
    // Slanje linka za resetovanje lozinke
    public function sendResetLinkEmail(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string|email|max:255',
        ]);

        $response = Password::sendResetLink($data);

        if ($response == Password::RESET_LINK_SENT) {
            return back()->with('status', 'We have emailed your password reset link!');
        }

        return back()->withErrors(['email' => 'We could not find a user with that email address.']);
    }

    // Postavljanje nove lozinke
    public function reset(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'token' => 'required',
        ]);

        $response = Password::reset($data, function ($user) use ($data) {
            $user->password = Hash::make($data['password']);
            $user->save();
        });

        if ($response == Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', 'Your password has been reset!');
        }

        return back()->withErrors(['email' => 'We could not reset your password.']);
    }
}
