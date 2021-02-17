<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('pages.about');
    }
    
    public function blog()
    {
        return view('pages.about');
    }
}
