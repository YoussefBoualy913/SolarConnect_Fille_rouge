<?php

use App\Http\Controllers\Prestataire\AvisController;
use App\Http\Controllers\Prestataire\CommandeController;
use App\Http\Controllers\Prestataire\DashboardController;
use App\Http\Controllers\Prestataire\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::prefix('prestataire')->name('prestataire.')->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('profile', [ProfileController::class, 'show'])->name('profile');
    Route::patch('profile', [ProfileController::class, 'update'])->name('update');

    Route::resource('services', ServiceController::class);
    Route::resource('commandes', CommandeController::class);
    Route::resource('avis', AvisController::class)->only(['index']);

});