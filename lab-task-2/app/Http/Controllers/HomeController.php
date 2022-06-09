<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function loginn()
    {
        return view('pages.logIn');
    }

    public function registration()
    {
        return view('pages.reg');
    }

    public function contactus()
    {
        return view('pages.contact');
    }

}
