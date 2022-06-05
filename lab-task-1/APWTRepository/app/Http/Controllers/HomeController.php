<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function aboutus()
    {
        return view('pages.aboutUs');
    }

    public function contactus()
    {
        return view('pages.contactUs');
    }

    public function home()
    {
        return view('pages.home');
    }
    public function team()
    {
        return view('pages.ourTeams');
    }

    public function product()
    {  
        $pro=['chips','pickle','drinks','water','Milk','Sugar','Ice cream'];
        //return view('pages.product');
        return view('pages.product')->with('p', $pro);
    }
}
