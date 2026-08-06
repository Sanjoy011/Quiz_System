<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Models\Mcq;
use Illuminate\Support\Facades\Route;

// User_Home-page
Route::get(('/'), [UserController::class, 'UserHome']); // main page
// Show User Quiz list
Route::get('user-show-list/{category}/{id}', [UserController::class, 'userQuizListView']);
// User-Catigory-list
Route::get('/catigory', [UserController::class, 'UserCatigories']);

// User Sign-Up view
Route::view('user-signup', '9_user-signup');
// user Signup quiz start page
Route::get('/user-signup-quiz', [UserController::class, 'userSignUpQuiz']);
// User Sign-Up controller
Route::post('/user-signup', [UserController::class, 'userSignUp']);

// User Log-in view
Route::view('/user-login', '11_user-login');
// User form login
Route::post('user-login', [UserController::class, 'userLogin']);
// user login quiz start page
Route::get('/user-login-quiz', [UserController::class, 'userLoginQuiz']);

// User attempt mcq
Route::get('/user-mcq/{id}/{name}', [UserController::class, 'UserMcqAttempt']);
// User Start quiz
Route::get('/mcq/{id}/{name}', [UserController::class, 'UserStartMcq']);
// User Submit Quiz
Route::post('/submit-next/{id}', [UserController::class, 'UserSubmitMcq']);
Route::get('/submit-next/{id}', function ($id) {
    $currentQuiz = session('currentQuiz');

    if (! $currentQuiz) {
        return redirect('/');
    }

    $nextMcq = Mcq::where('quiz_id', $currentQuiz['quizId'])
        ->where('id', '>', $id)
        ->first();

    if ($nextMcq) {
        return redirect('/mcq/'.$nextMcq->id.'/'.$currentQuiz['quizName']);  //redirect('/mcq/69/PHP Quiz')
    }

    return redirect('/');
});

//User Details Page
Route::get('/user-details',[UserController::class,'userDetails']);

// User Session Logout
Route::get('/user-logout', [UserController::class, 'userLogout']);

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
// Quiz-list & Quiz view
Route::get('show-list/{category}/{id}', [AdminController::class, 'quizListView']);
