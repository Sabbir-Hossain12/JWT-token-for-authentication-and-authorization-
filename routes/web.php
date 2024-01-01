<?php

use App\Http\Controllers\userController;
use App\Http\Middleware\tokenMiddleware;
use Illuminate\Support\Facades\Route;

// pages
Route::view('/registrationPage','pages.registration');
Route::view('/loginPage','pages.login');
Route::view('/profilePage','pages.profile')->middleware([tokenMiddleware::class]);

// backend routes
Route::post('/registration',[userController::class,'registration']);
 Route::post('/login',[userController::class,'login']);



