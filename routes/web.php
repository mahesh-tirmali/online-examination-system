<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;




Route::get('/register',[AuthController::class,"loadRegister"])->name("loadRegister");
Route::post('/register',[AuthController::class,"studentRegister"])->name("studentRegister");

Route::get("/login",function(){
    return redirect('/');
});

Route::get('/',[AuthController::class,"loadLogin"])->name("loadLogin");
Route::post('/',[AuthController::class,"userLogin"])->name("userLogin");

Route::get('/logout',[AuthController::class,"logout"]);


Route::group(["middleware" => ['web','checkAdmin']], function(){
    Route::get('/admin/dashboard',[AuthController::class,"adminDashboard"]);
});

Route::group(["middleware" => ['web','checkStudent']], function(){
    Route::get('/dashboard',[AuthController::class,"studentDashboard"]);
});