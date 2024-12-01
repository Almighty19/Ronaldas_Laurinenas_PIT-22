<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KlientasController;
use App\Http\Controllers\DarbuotojasController;
use App\Http\Controllers\Adminas\UserController;
use App\Http\Controllers\Adminas\ConferenceController;
use App\Http\Controllers\Auth\RegisterController;

// Pagrindinis puslapis
Route::get('/', [HomeController::class, 'index']);

// Registracija
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Kliento posistemis
Route::prefix('client')->group(function () {
    Route::get('conferences', [KlientasController::class, 'index'])->name('client.conference.index');
    Route::get('conference/{id}', [KlientasController::class, 'show'])->name('client.conference.show');
    Route::post('conference/register', [KlientasController::class, 'register'])->name('client.conference.register');
});

// Darbuotojo posistemis
Route::prefix('employee')->group(function () {
    Route::get('conferences', [DarbuotojasController::class, 'index'])->name('employee.conference.index'); // Pakeista
    Route::get('conference/{id}', [DarbuotojasController::class, 'show'])->name('employee.conference.show'); // Pakeista
});

// Administratoriaus puslapis
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.home');

    Route::get('users', [UserController::class, 'index'])->name('admin.users');
    Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::post('user/{id}/update', [UserController::class, 'update'])->name('admin.user.update');

    Route::get('conferences', [ConferenceController::class, 'index'])->name('admin.conferences');
    Route::get('conference/create', [ConferenceController::class, 'create'])->name('admin.conference.create');
    Route::post('conference/store', [ConferenceController::class, 'store'])->name('admin.conference.store');
    Route::get('conference/{id}/edit', [ConferenceController::class, 'edit'])->name('admin.conference.edit');
    Route::post('conference/{id}/update', [ConferenceController::class, 'update'])->name('admin.conference.update');
    Route::delete('conference/{id}', [ConferenceController::class, 'destroy'])->name('admin.conference.destroy');
});



