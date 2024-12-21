<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\TwoFactorAuthenticationProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TwoFactorAuthenticationController extends Controller
{
     // Aktiviranje Two-Factor Authentication (2FA)
     public function enable(Request $request, TwoFactorAuthenticationProvider $provider)
     {
         $user = $request->user();
 
         // Generiše i čuva tajni ključ i obnovljive kodove
         $user->forceFill([
            'two_factor_secret' => encrypt($provider->generateSecretKey()),
            'two_factor_recovery_codes' => encrypt(json_encode(collect()->times(8, function () {
                return Str::random(10) . '-' . Str::random(10);
            })->toArray())),
        ])->save();
 
         return back()->with('status', 'Two-factor authentication enabled.');
     }
 
     // Onemogućavanje Two-Factor Authentication (2FA)
     public function disable(Request $request)
     {
         $user = $request->user();
 
         $user->forceFill([
             'two_factor_secret' => null,
             'two_factor_recovery_codes' => null,
             'two_factor_confirmed_at' => null,
         ])->save();
 
         return back()->with('status', 'Two-factor authentication disabled.');
     }
 
     // Potvrda Two-Factor Authentication (2FA)
     public function confirm(Request $request, TwoFactorAuthenticationProvider $provider)
     {
         $user = $request->user();
         $code = $request->input('code');
 
         // Verifikacija unesenog koda
         if (!$provider->verify(decrypt($user->two_factor_secret), $code)) {
             return back()->withErrors(['code' => 'Invalid verification code.']);
         }
 
         $user->forceFill(['two_factor_confirmed_at' => now()])->save();
 
         return back()->with('status', 'Two-factor authentication confirmed.');
     }
}
