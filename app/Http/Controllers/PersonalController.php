<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    //

    function index()
    {
        return view('index');
    }

    function contact()
    {
        return view('contact');
    }


    function projects()
    {
        return view('projects');
    }

    function resume()
    {
        return view('resume');
    }
}
