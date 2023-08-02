<?php

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
Route::middleware(['auth'])->prefix('Aiuko')->group(function () {
    Route::get('/Aiuko', function () {
        return view('home');
    });
});

Route::middleware(['auth'])->prefix('Aiuko')->group(function () {
    Route::get('/diets', function () {
        return view('diets');
    })->name('diets');

    Route::get('/intollerances', function () {
        return view('intollerances');
    })->name('intollerances');
});

require __DIR__.'/auth.php';
