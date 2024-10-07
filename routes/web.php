<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KlientasController;
use App\Http\Controllers\DarbuotojasController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ConferenceController;

// Pagrindinis puslapis
Route::get('/', [HomeController::class, 'index']); // Šis nurodo, kad pagrindinis puslapis bus rodomas iš HomeController

// Kliento posistemis
Route::prefix('client')->group(function () {
    Route::get('conferences', [KlientasController::class, 'index']);
    Route::get('conference/{id}', [KlientasController::class, 'show']);
    Route::post('conference/register', [KlientasController::class, 'register']);
});

// Darbuotojo posistemis
Route::prefix('employee')->group(function () {
    Route::get('conferences', [DarbuotojasController::class, 'index']);
    Route::get('conference/{id}', [DarbuotojasController::class, 'show']);
});

// Administratoriaus posistemis
Route::prefix('admin')->group(function () {
    Route::get('users', [UserController::class, 'index']);
    Route::get('user/{id}/edit', [UserController::class, 'edit']);
    Route::post('user/{id}/update', [UserController::class, 'update']);

    Route::get('conferences', [ConferenceController::class, 'index']);
    Route::get('conference/create', [ConferenceController::class, 'create']);
    Route::post('conference/store', [ConferenceController::class, 'store']);
    Route::get('conference/{id}/edit', [ConferenceController::class, 'edit']);
    Route::post('conference/{id}/update', [ConferenceController::class, 'update']);
    Route::delete('conference/{id}', [ConferenceController::class, 'destroy']);
});
