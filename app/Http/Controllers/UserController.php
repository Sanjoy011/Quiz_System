<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Result;

class UserController extends Controller
{
    public function UserHome()
    {
       $category = Categorie::withCount('results')->get();
        return view('welcome', ['Categories' => $category]);
    }

    //Show User Quix list
    public function userQuizListView($category,$id){ // $category => quiz category name || Quiz=>id
            $quizdata=Result::where('category_id',$id)->get();
            return view('7_user-quiz-list ',["quizdata"=>$quizdata,'category'=>$category]);
       
        }
}
