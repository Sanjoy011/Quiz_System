<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//User_Home-page
Route::get(('/'),[UserController::class,'UserHome']); // main page
//Show User Quiz list
Route::get('user-show-list/{category}/{id}',[UserController::class,'userQuizListView']);

// Admin Login with Model-View-Controller
Route::view('admin-login', '1_admin-login');
Route::post('admin-login', [AdminController::class, 'adminlogin']);
// Validation, Session and Dashboard
Route::get('admin-home', [AdminController::class, 'dashboard']);
// Make Navbar, Logout feature , Category Page
Route::get('admin-categories', [AdminController::class, 'adminCategories']);
// Admin-logout
Route::get('admin-logout', [AdminController::class, 'adminLogout']);
// Add Display Category
Route::post('add-categories', [AdminController::class, 'addcategories']);
// deleted category
Route::get('categories/delete/{id}', [AdminController::class, 'categoryDeleted']);
// AddQuiz
Route::get('add-quiz', [AdminController::class, 'addQuiz']);
// Add Mcq in Quiz
Route::post('add-mcq', [AdminController::class, 'addMcq']);
// Finish Quiz
Route::get('fenish-quiz', [AdminController::class, 'finishQuiz']);
// Show Quiz
Route::get('show-quiz/{id}/{quizname}', [AdminController::class, 'showQuiz'])->name('show-quiz');
//Quiz-list & Quiz view 
Route::get('show-list/{category}/{id}',[AdminController::class,'quizListView']);

