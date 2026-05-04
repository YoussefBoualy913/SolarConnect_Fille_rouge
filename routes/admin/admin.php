<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->name('admin.')->middleware('admin')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
        Route::patch('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');

        Route::resource('users', UserController::class);
        Route::post('approuver/users/{user}', [UserController::class,'approuver'])->name('approuver');
        Route::PATCH('banni/users/{user}', [UserController::class,'banni'])->name('banni');
        Route::PATCH('debanni/users/{user}', [UserController::class,'debanni'])->name('debanni');
        Route::resource('categories', CategoryController::class);
        Route::get('/document/cin/{user}', [DocumentController::class, 'showCin'])->name('showCin');
        Route::get('/document/certificat/{user}', [DocumentController::class, 'showCertificat'])->name('showCertificat');
});