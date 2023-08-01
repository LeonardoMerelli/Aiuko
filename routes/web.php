<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('auth/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('auth/google/callback', function () {
    $user = Socialite::driver('google')->user();

    // Esempio di utilizzo dei dati dell'utente ottenuti da Google
    // $user->getId(); // ID univoco dell'utente su Google
    // $user->getName(); // Nome completo dell'utente
    // $user->getEmail(); // Email dell'utente

    // Aggiungi qui la logica per l'autenticazione dell'utente nel tuo sistema
    // ...

    return redirect('/')->with('success', 'Accesso con Google riuscito!');
});
