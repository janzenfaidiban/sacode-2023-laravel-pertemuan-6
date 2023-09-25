<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // method / function index
    public function index() 
    {
        return view('index');
    }

    // home page
    public function profile()
    {
        return view('pages.profile');
    }

    // contact page
    public function contact()
    {
        return view('pages.contact');
    }



}