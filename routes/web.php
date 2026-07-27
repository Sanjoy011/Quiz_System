<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

//Admin Login with Model-View-Controller 
Route::view('admin-login','1_admin-login');
Route::post('admin-login',[AdminController::class,'adminlogin']);

//Validation, Session and Dashboard 
Route::get('admin-home',[AdminController::class,'dashboard']);

//Make Navbar, Logout feature , Category Page
Route::get('admin-categories',[AdminController::class,'adminCategories']);
//Admin-logout
Route::get('admin-logout',[AdminController::class,'adminLogout']);
//Add Display Category
Route::post('add-categories',[AdminController::class,'addcategories']);
//deleted category
Route::get('categories/delete/{id}',[AdminController::class,'categoryDeleted']);
