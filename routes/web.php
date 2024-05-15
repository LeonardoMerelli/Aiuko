<?php

use App\Http\Controllers\DietController;
use App\Http\Controllers\FacebookAuthController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\IntolleranceController;
use App\Http\Controllers\SnackController;
use App\Http\Controllers\ElectrodomesticsController;
use App\Http\Controllers\CaratteristicheController;
use App\Models\electiodomestic;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/Aiuko', function () {
    auth()->logout();
    return view('home');
})->name('home');

Route::middleware(['can:isSetup'])->prefix('Aiuko')->group(function () {
    Route::get('/diete', [DietController::class, 'create'])
        ->name('diets.create');
    
    Route::post('/diete', [DietController::class, 'store'])
        ->name('diets.store');
    
    Route::get('/intolleranze', [IntolleranceController::class, 'create'])
        ->name('intollerances.create');
    
    Route::post('/intolleranze', [IntolleranceController::class, 'store'])
        ->name('intollerances.store');
    
    Route::get('/caratteristiche', [CaratteristicheController::class, 'create']
        )->name('caratteristiche.create');
    
    Route::post('/caratteristiche', [CaratteristicheController::class, 'store'])
        ->name('caratteristiche.store');

    Route::get('/elettrodomestici', [ElectrodomesticsController::class, 'create']
        )->name('elettrodomestici.create');
    
    Route::post('/elettrodomestici', [ElectrodomesticsController::class, 'store'])
        ->name('elettrodomestici.store');
    
    Route::get('/snack', [SnackController::class, 'create']
        )->name('snack.create');
    
    Route::post('/snack', [SnackController::class, 'store'])
        ->name('snack.store');

    Route::get('/colazione', [ColazioneController::class, 'create']
        )->name('colazione.create');
    
    Route::post('/colazione', [ColazioneController::class, 'store'])
        ->name('colazione.store');

    Route::get('/pranzo', [PranzoController::class, 'create']
        )->name('pranzo.create');
    
    Route::post('/pranzo', [PranzoController::class, 'store'])
        ->name('pranzo.store');
        
    Route::get('/alimenti', [AlimentiController::class, 'create']
        )->name('alimenti.create');

    Route::post('/alimenti', [AlimentiController::class, 'store'])
        ->name('alimenti.store');
});

Route::get('/Aiuko/impostazioniPasto', function () {
    return view('mealPreSelect');
})->name('impostazioniPasto');

Route::get('/Aiuko/auth/google', [GoogleAuthController::class, 'redirect'])
        ->name('google.auth');

Route::get('/Aiuko/auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

Route::get('/Aiuko/auth/facebook', [FacebookAuthController::class, 'redirect'])
        ->name('facebook.auth');

Route::get('/Aiuko/auth/facebook/call-back', [FacebookAuthController::class, 'callbackFacebook']);

require __DIR__.'/auth.php';
