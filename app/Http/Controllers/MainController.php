<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function home (){
        return view('index');
    }

    public function about (){
        return view('about');
    }
}
