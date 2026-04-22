<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DocumentController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('users', UserController::class);
        Route::post('approuver/users/{user}', [UserController::class,'approuver'])->name('approuver');
        Route::resource('categories', CategoryController::class);
        Route::get('/document/cin/{user}', [DocumentController::class, 'showCin'])->name('showCin');
        Route::get('/document/certificat/{user}', [DocumentController::class, 'showCertificat'])->name('showCertificat');
});