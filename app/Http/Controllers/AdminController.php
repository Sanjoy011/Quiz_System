<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Admin;
use App\Models\Categorie;
use App\Models\Result;

class AdminController extends Controller
{
     //Login page
    function adminlogin(Request $request){

        //Validation, Session and Dashboard 
        $request->validate(
            [
                "name"=>"required",
                "password"=>"required"
            ],
            //Coustome Validation 
            [
                "name.required"=>"Name is required.",
                "password.required"=>"Password is required."
            ]
        );

        //Admin Login with Model-View-Controller
        $admin = Admin::where(
            [
               ['name',"=",$request->name],
               ['password',"=",$request->password],
            ])->first();

        if (!$admin){

            $request->validate(
            [ 
                "user" => "required"
            ],
            //coustome validation
            [
                "user.required" => "Invalid email or password for this portal."
                //comment
            ]  
        );
        } else {
            Session::put('user', $admin);
            return redirect('admin-home');
        }
    }  

    //HomePage
    function dashboard(){
            $adminUser = Session::get('user');
            // return $adminUser->name;  //just check it 
            if($adminUser){
                return view('2_adminDeshboard',["name"=>$adminUser->name]);  //Left side name = the variable name you want to use in the view Admin.blade.php
            }else{
                return redirect('admin-login');
                
            }
    }

    //Categories Page modify
    function adminCategories(){
            $category = Categorie::get();
            $adminUser = Session::get('user');
            // return $adminUser->name;  //just check it 
            if($adminUser){
                return view('3_admin-categories',["name"=>$adminUser->name,"categories"=>$category]);  
            }else{
                return redirect('admin-login');
                
            }
    }

    //Logout page
    function adminLogout(){
        Session::forget('user');
        return redirect('admin-login');

    }

    // Add Display Category
    function addcategories(Request $request){
            $request->validate(
                [
                    "category" => "required | min:3 | unique:categories,name"  // The category field must be at least 3 characters. | and same name not repete agian. first categories ->table name and after name -> course name identify
                ]);
        $adminUser = Session::get('user');
        $category = new Categorie();
        $category->name=$request->category;
        $category->creator=$adminUser->name;
        $category->save();

        if($category){
            Session::flash('addcategory'," Successfully added the course " .$request->category . "🎉");  //addcategory->keys || session message
        }
        return redirect('admin-categories');
            
    }

    function categoryDeleted($id){
        $deleteCategory = Categorie::find($id)->delete();
        if($deleteCategory){
            Session::flash('deletecategory'," The selected category has been deleted successfully.");
        }
        return redirect('admin-categories');
    }

    function addQuiz(){
            $category = Categorie::get();
            $adminUser = Session::get('user');
            // return $adminUser->name;  //just check it 
            if($adminUser){
                 $quizName=request('quiz');
                 $category_id=request('category_id');

                if($quizName && $category_id && !Session::has('quizdetails')){ // !Session::has('quizdetails')->যদি quizdetails নামে কোনো তথ্য আগে থেকে Session-এ সংরক্ষিত না থাকে, তাহলে নতুন Quiz তৈরি করে Database-এ Save করবে।
                    $quiz = new Result();
                    $quiz->name=$quizName;
                    $quiz->category_id=$category_id;
                    if($quiz->save()){
                        Session::put('quizdetails',$quiz);
                    }
                }
                return view('4_add-quiz',["name"=>$adminUser->name,"categories"=>$category]);  
            }else{
                return redirect('admin-login');
                
            }
        }


}
