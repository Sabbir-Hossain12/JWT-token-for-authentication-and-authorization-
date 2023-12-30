<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

// pages
Route::view('/registrationPage','pages.registration');
Route::view('/loginPage','pages.login');

// backend routes
Route::post('/registration',[userController::class,'registration']);
// Route::post('/login',[userController::class,'login']);



