<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle() {
        $google_user = Socialite::driver('google')->stateless()->user();

        $user = User::where('google_id', $google_user->getId())
                    ->orWhere('email', $google_user->getEmail())
                    ->first();

        if(!$user) {
            $user = User::create([
                'nome' => $google_user->getName(),
                'email' => $google_user->getEmail(),
                'google_id' => $google_user->getId(),
            ]);
        }
        auth()->login($user);

        if(auth()->user()->eta != null || auth()->user()->peso != null || auth()->user()->altezza != null) {
            return redirect()->route('diets.create');
        }else if(auth()->user()->setup == 0) {
            return redirect()->route('caratteristiche.create');
        }else if(auth()->user()->setup == 1) {
            return redirect()->route('attesa.create');
        }
    }
}
