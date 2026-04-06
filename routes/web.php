<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//visiteur

Route::prefix('/register')->group(function () {

    Route::get('create',[RegisterController::class,'create']);
});