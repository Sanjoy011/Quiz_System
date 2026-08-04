<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Customers;
use App\Models\Mcq;
use App\Models\Result;
use App\Models\Record;
use App\Models\McqRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
        $mcq = Mcq::where('quiz_id', $id)->get();
        Session::put('firstmcq', $mcq[0]);

        return view('8_user-attempt-mcq', ['quizname' => $quizname, 'quizCount' => $quizCount]);
    }

    // User SignUp
    public function userSignUp(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|min:5|max:50',
                'email' => 'required|email|unique:customers,email',
                'phone' => 'required|digits:10|unique:customers,phone',
                'password' => 'required|string|min:6',
            ],
            [
                'name.required' => 'Please enter your full name.',
                'name.min' => 'Your name must be at least 5 characters long.',
                'name.max' => 'Your name cannot exceed 50 characters.',

                'email.required' => 'Email address is required.',
                'email.email' => 'Please enter a valid email address.',
                'email.unique' => 'This email is already registered.',

                'phone.required' => 'Phone number is required.',
                'phone.digits' => 'Phone number must contain exactly 10 digits.',
                'phone.unique' => 'This phone number is already registered.',

                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 6 characters.',
            ]);

        $addCustomer = new Customers;
        $addCustomer->name = $request->name;
        $addCustomer->email = $request->email;
        $addCustomer->phone = $request->phone;
        $addCustomer->password = Hash::make($request->password);
        $addCustomer->save();
        if ($addCustomer) {
            Session::put('user', $addCustomer);
            if (Session::has('quiz-url')) {
                $url = Session::get('quiz-url');
                Session::forget('quiz-url');

                return redirect($url);
            }

            return redirect('/');
        }
    }

    // User Signup Quiz
    public function userSignUpQuiz()
    {
        Session::put('quiz-url', url()->previous());

        return view('9_user-signup');
    }

    // User Logout
    public function userLogout()
    {
        Session::forget('user');

        return redirect('/');
    }

    // User categories
    public function UserCatigories()
    {
        $category = Categorie::get();

        return view('10_catigory-list', ['Categories' => $category]);
    }

    // User Login
    public function userLogin(Request $request)
    {

        $request->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);

        $customer = Customers::where('email', $request->email)->first();
        if (! $customer || ! Hash::check($request->password, $customer->password)) {
            $request->validate([
                'user' => 'required',
            ],
                [
                    'user.required' => 'User not found.',
                ]);
        }
        if ($customer) {
            Session::put('user', $customer);
            if (Session::has('quiz-url')) {
                $url = Session::get('quiz-url');
                Session::forget('quiz-url');

                return redirect($url);
            } else {
                return redirect('/');
            }
        }
    }

    // User Login Quiz
    public function userLoginQuiz()
    {
        Session::put('quiz-url', url()->previous());
        return view('11_user-login');
    }

    // User Start quiz
    public function UserStartMcq($id, $name)
    {
        $firstMcq = Session::get('firstmcq');

        if (! $firstMcq) {
            return redirect('/');
        }

        $records= new Record();
        $records->name=Session::get('user')->name;
        $records->quiz_id=Session::get('firstmcq')->quiz_id;
        $records->customer_id=Session::get('user')->id;
        $records->status=1;

        if($records->save()){
            $currentQuiz = [
                'totalMcq' => Mcq::where('quiz_id', $firstMcq->quiz_id)->count(),
                'currentMcq' => 1,
                'quizName' => $name,
                'quizId' => $firstMcq->quiz_id,
                'recordId' => $records->id
            ];

            Session::put('currentQuiz', $currentQuiz);

            $mcqdata = Mcq::find($id);

            if (! $mcqdata) {
                return redirect('/');
            }

            return view('12_user-mcq-page', [
                'quizname' => $name,
                'mcqdata' => $mcqdata,
                'currentQuiz' => $currentQuiz,
            ]);
        }else{
            return redirect('/');
        }

        
    }

    //User Submit MCQ
    public function UserSubmitMcq(Request $request, $id){
        $currentQuiz=Session::get('currentQuiz');

        if(!$currentQuiz){
            return redirect('/');
        }
        $currentQuiz['currentMcq']+=1;  // $currentQuiz['currentMcq'] = $currentQuiz['currentMcq'] + 1; = 2
        $mcqdata = Mcq::where([
            ['id','>',$id],
            ['quiz_id','=',$currentQuiz['quizId']]
        ])->first();

        $isExit= McqRecord::where([
            ['record_id','=',$currentQuiz['recordId']],
            ['mcq_id','=',$request->id],

        ])->count();

        $request->validate([
            'answer' => 'required'
        ]);

        if($isExit<1){
            $mcq_record=new McqRecord();
            $mcq_record->name=Session::get('user')->name;   
            $mcq_record->record_id=$currentQuiz['recordId'];
            $mcq_record->mcq_id=$request->id;
            $mcq_record->select_answer=$request->answer;  //this answer input radio button ->name = answer
                if($request->answer == Mcq::find($request->id)->currect_ans){
                    $mcq_record->correct_answer='Correct';
                }else{
                    $mcq_record->correct_answer='Wrong';
                }
            $mcq_record->save();
        }

        Session::put('currentQuiz',$currentQuiz);

        if($mcqdata){
            return view('12_user-mcq-page',["quizname"=>$currentQuiz['quizName'],"mcqdata"=>$mcqdata,"currentQuiz"=>$currentQuiz]);
        }else{
            return "Result Soon...";
        }
        
    }










}
