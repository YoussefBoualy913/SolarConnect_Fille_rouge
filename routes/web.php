<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//visiteur

Route::prefix('/register')->group(function () {

    Route::get('create',[RegisterController::class,'create']);
    Route::Post('store-client',[RegisterController::class,'registerClient'])->name('users.registerClient');
    Route::Post('store-prestataire',[RegisterController::class,'registerPrestataire'])->name('users.registerPrestataire');
});

Route::prefix('/auth')->group(function (){
  Route::get('login',[LoginController::class,'create'])->name('login');
  Route::post('login',[LoginController::class,'store'])->name('login.submit');
  Route::get('logout',[LoginController::class,'logout'])->name('logout');
});