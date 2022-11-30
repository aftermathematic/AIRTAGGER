<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function home()
    {
         return view('home');
    }
    public function about()
    {
         return view('about');
    }
}
