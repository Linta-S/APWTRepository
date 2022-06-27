<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Systemuser;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function loginn()
    {
        return view('pages.logIn');
    }

    public function loginSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            'password' => 'string|confirmed|min:8',
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
            'password' => 'required',
            'dob'=>'required',
            'email'=>'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/' 
        ],
        ['name.required'=>"Please put you name here"],
        ['password.required'=>"Please put you password here"],
        ['dob.required'=>"Please put you name here"],
        ['email.required'=>"Please put you name here"],
        ['phone.required'=>"Please put you name here"]
       
    );  //validation ends

    $st = new Systemuser();                 //model
    $st->name =$request->name;
    $st->password =$request->password;
    $st->dob =$request->dob;
    $st->email =$request->email;
    $st->phone =$request->phone;
    $st->save();
     return "<h1>name: $request->name and $request->email</h1>";
   // return redirect()->route('dash');
    }


    public function dashboard()
    {
        //return view('pages.dashboard');
       /* $st = array();

          for($i=0; $i<5; $i++){
             $st = array(
                  "name" => "Student " . ($i+1),
                  "id" =>"00" . ($i+1)

              );
              $systemusers[] = (object)$st; 

          }
          return view('pages.dashboard')->with('systemusers', $systemusers);*/

          // $st= Systemuser::all();
          $st =  Systemuser::paginate(3);
           return view ('pages.dashboard',['keyy'=>$st]);

         // $st =  Systemuser::paginate(3);
         // return view('pages.dashboard')->with('keyy', $st);
    }

    public function  Edit(Request $request){

        $st  = Systemuser::where('id', $request->id)->first();

        // return $student;
        return view('pages.Edit')->with('keyy', $st);

    }
    public function  EditSubmitted(Request $request){

        $st  = Systemuser::where('id', $request->id)->first();

        // return $request->id;
       // $st = new Systemuser();                 //model
    $st->Name =$request->Name;
    // $st->password =$request->password;
    $st->DOB=$request->DOB;
    $st->Email =$request->Email;
    $st->Phone =$request->Phone;
    $st->save();

        return redirect()->route('dash');
    }


    public function  Delete(Request $request){
        $st  = Systemuser::where('id', $request->id)->first();
        $st->delete();
        
        return redirect()->route('dash');
    }


}
