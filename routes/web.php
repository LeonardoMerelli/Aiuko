<?php

use App\Http\Controllers\DietController;
use App\Http\Controllers\IntolleranceController;
use App\Http\Controllers\ProfileController;
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

Route::get('/prova', function () {
    return view('prova');
})->name('prova');

Route::middleware(['can:isSetup'])->prefix('Aiuko')->group(function () {
    Route::get('/diete', [DietController::class, 'create'])
        ->name('diets.create');
    
    Route::post('/diete', [DietController::class, 'store'])
        ->name('diets.store');
    
    Route::get('/intolleranze', [IntolleranceController::class, 'create'])
        ->name('intollerances.create');
    
    Route::post('/intolleranze', [IntolleranceController::class, 'store'])
        ->name('intollerances.store');
});

require __DIR__.'/auth.php';
