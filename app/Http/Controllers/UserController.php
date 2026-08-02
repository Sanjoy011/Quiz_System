<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Customers;
use App\Models\Mcq;
use App\Models\Result;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserHome()
    {
        $category = Categorie::withCount('results')->get();

        return view('welcome', ['Categories' => $category]);
    }

    // Show User Quix list
    public function userQuizListView($category, $id) // $category => quiz category name || Quiz=>id
    {
        // You want to look inside the results table and pick only those rows whose category_id matches the given $id
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

    // User SignUp
    public function userSignUp(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'required',
            'password' => 'required|min:4',
        ]);

        $addCustomer = new Customers;
        $addCustomer->name = $request->name;
        $addCustomer->email = $request->email;
        $addCustomer->phone = $request->phone;
        $addCustomer->password = $request->password;

        if ($addCustomer->save()) {
            return redirect('/');
        }
    }
}

