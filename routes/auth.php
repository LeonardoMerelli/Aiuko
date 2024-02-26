<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;


Route::prefix('Aiuko')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register.create');

    Route::post('register', [RegisteredUserController::class, 'store'])
        ->name('register.store');

});

Route::middleware('guest')->prefix('Aiuko')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login.create');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])
                ->name('login.store');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
