<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;




Route::get('/register',[AuthController::class,"loadRegister"])->name("loadRegister");
Route::post('/register',[AuthController::class,"studentRegister"])->name("studentRegister");

Route::get("/login",function(){
    return redirect('/');
});

Route::get('/',[AuthController::class,"loadLogin"])->name("loadLogin");
Route::post('/',[AuthController::class,"userLogin"])->name("userLogin");

Route::get('/logout',[AuthController::class,"logout"]);
Route::get('/forget-password',[AuthController::class,"forgetPasswordLoad"]);
Route::post('/forget-password',[AuthController::class,"forgetPassword"])->name("forgetPassword");

Route::get('/reset-password',[AuthController::class,"resetPasswordLoad"]);
Route::post('/reset-password',[AuthController::class,"resetPassword"])->name("resetPassword");

Route::group(["middleware" => ['web','checkAdmin']], function(){
    Route::get('/admin/dashboard',[AuthController::class,"adminDashboard"]);

    //Subject Routes
    Route::post('/add-subject',[AdminController::class,'addSubject'])->name("addSubject");
});

Route::group(["middleware" => ['web','checkStudent']], function(){
    Route::get('/dashboard',[AuthController::class,"studentDashboard"]);
});