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

Route::get('/Aiuko', [UserProfileController::class, 'show'])
        ->name('aiuko');

Route::get('/register', [UserProfileController::class, 'edit'])
        ->name('register.edit');

Route::post('/register', [UserProfileController::class, 'update'])
        ->name('profilo.update');

Route::middleware(['can:isUser'])->group(function () {
    
});
