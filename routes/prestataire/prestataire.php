<?php

use App\Http\Controllers\Prestataire\AvisController;
use App\Http\Controllers\Prestataire\OrderController;
use App\Http\Controllers\Prestataire\DashboardController;
use App\Http\Controllers\Prestataire\ProfileController;
use App\Http\Controllers\Prestataire\ServiceController;
use Illuminate\Support\Facades\Route;

Route::prefix('prestataire')->name('prestataire.')->middleware('prestataire')->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::resource('services', ServiceController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('avis', AvisController::class)->only(['index']);

});