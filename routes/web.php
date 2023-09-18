<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/register',[AuthController::class,"loadRegister"])->name("loadRegister");
Route::post('/register',[AuthController::class,"studentRegister"])->name("studentRegister");