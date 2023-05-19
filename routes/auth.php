<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

//invitado, rutas de inicio de creación e inicio de sesión
Route::middleware('guest')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

//si estoy autenticado puedo cerrar sesión
Route::middleware('auth')->group(function () {

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');
});
