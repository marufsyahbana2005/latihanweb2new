<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rute autentikasi sesi SPA:
Route::post('/login', [SessionController::class, 'login'])
    ->middleware('throttle:api-login');

Route::post('/logout', [SessionController::class, 'logout'])
    ->middleware('auth:web');