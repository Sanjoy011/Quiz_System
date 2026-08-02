<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Mcq;
use App\Models\Result;

class UserController extends Controller
{
    public function UserHome()
    {
        $category = Categorie::withCount('results')->get();

        return view('welcome', ['Categories' => $category]);
    }

    // Show User Quix list
    public function userQuizListView($category, $id) // $category => quiz category name || Quiz=>id

    {// You want to look inside the results table and pick only those rows whose category_id matches the given $id
        $quizdata = Result::withCount('Mcq')->where('category_id', $id)->get();

        return view('7_user-quiz-list', ['quizdata' => $quizdata, 'category' => $category]);

    }

    // User attempt Mcq
    public function UserMcqAttempt($id, $name)
    {
        $quizname = $name;
        $quizCount = Mcq::where('quiz_id', $id)->count();

        return view('8_user-attempt-mcq', ['quizname' => $quizname, 'quizCount' => $quizCount]);
    }
}
