<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Admin;

class AdminController extends Controller
{
     
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
                "user" => "required",
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

    function dashboard(){
            $adminUser = Session::get('user');
            // return $adminUser->name;  //just check it 
            if($adminUser){
                return view('2_adminDeshboard',["name"=>$adminUser->name]);  //Left side name = the variable name you want to use in the view Admin.blade.php
            }else{
                return redirect('admin-login');
                
            }
    }

    function adminCategories(){
            $adminUser = Session::get('user');
            // return $adminUser->name;  //just check it 
            if($adminUser){
                return view('3_admin-categories',["name"=>$adminUser->name]);  //Left side name = the variable name you want to use in the view Admin.blade.php
            }else{
                return redirect('admin-login');
                
            }
    }
    function adminLogout(){
        Session::forget('user');
        return redirect('admin-login');

    }
    

}
