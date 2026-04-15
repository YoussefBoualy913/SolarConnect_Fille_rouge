<?php

use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\ReviewController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\Client\ServiceController;
use Illuminate\Support\Facades\Route;

Route::prefix('client')->group(function () {

    Route::get('/profile', [ProfileController::class, 'show']);
    Route::put('/profile', [ProfileController::class, 'update']);

    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');

    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/cart/{id}', [CartController::class, 'add']);

    Route::get('/orders', [OrderController::class, 'index']);
    Route::post('/orders', [OrderController::class, 'store']);

    Route::post('/reviews', [ReviewController::class, 'store']);
});