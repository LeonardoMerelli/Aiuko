<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class FacebookAuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFacebook() {
        try{
            $facebook_user = Socialite::driver('facebook')->user();

            $user = User::where('facebook_id', $facebook_user->getId())
                        ->orWhere('email', $facebook_user->getEmail())
                        ->first();

            if(!$user) {
                $user = User::create([
                    'nome' => $facebook_user->getName(),
                    'email' => $facebook_user->getEmail(),
                    'facebook_id' => $facebook_user->getId(),
                ]);
            }
            auth()->login($user);

            if(auth()->user()->setup == 0){
                return redirect()->route('diets.create');
            }
            return redirect()->route('impostazioniPasto');
        }catch(\Throwable $th) {
            dd('errore '.$th->getMessage());
        }
    }
}
