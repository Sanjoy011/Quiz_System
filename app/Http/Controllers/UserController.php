<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Categorie;

class UserController extends Controller
{
    //homepage
    public function UserHome(){
        $caregory = Categorie::get();
        return view('welcome',["Categories"=>$caregory]);
    }
}
