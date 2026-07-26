<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

//Admin Login with Model-View-Controller 
Route::view('admin-login','admin-login');
Route::post('admin-login',[AdminController::class,'adminlogin']);

//Validation, Session and Dashboard 
Route::get('dashboard',[AdminController::class,'dashboard']);