<?php

use App\Http\Controllers\DietController;
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

Route::middleware(['auth'])->prefix('Aiuko')->group(function () {
    Route::get('/diete', [DietController::class, 'create'])
        ->name('diets.create');
    
    Route::post('/diete', [DietController::class, 'store'])
        ->name('diets.store');
    
    Route::get('/intolleranze', [DietController::class, 'create'])
        ->name('intollerances.create');
    
    Route::post('/intolleranze', [DietController::class, 'store'])
        ->name('intollerances.store');

    Route::get('/intollerances', function () {
        return view('intollerances');
    })->name('intollerances');
});

require __DIR__.'/auth.php';
