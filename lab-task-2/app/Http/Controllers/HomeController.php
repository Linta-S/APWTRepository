<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function loginn()
    {
        return view('pages.logIn');
    }

    public function loginSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            'password' => 'required|string|confirmed|min:8',
           /* 'dob'=>'required',
            'email'=>'email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'*/
        ],
        ['name.required'=>"Please put you name here"],
        ['password.required'=>"Please put you password here"]
    );
        return $request;
    }
    
    public function registration()
    {
        return view('pages.reg');
    }

    public function regSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            'password' => 'required|string|confirmed|min:8',
            'dob'=>'required',
            'email'=>'email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/' 
        ],
        ['name.required'=>"Please put you name here"],
        ['password.required'=>"Please put you password here"],
        ['dob.required'=>"Please put you name here"],
        ['email.required'=>"Please put you name here"],
        ['phone.required'=>"Please put you name here"]
       
    );
    return "<h1>name: $request->name and Email $request->email nd phone no. $request->phone</h1>";
    }

    public function contactus()
    {
        return view('pages.contact');
    }

}
