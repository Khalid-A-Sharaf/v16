<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index($name, $age)
    {
        return view('descreption', compact('name', 'age'));
    }

    // public function team()
    // {
    //     return 'TEAM PAGE';
    // }

    // public function group()
    // {
    //     return 'GROUP PAGE';
    // }
}
