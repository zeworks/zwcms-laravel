<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Templates;

class HomeController extends Controller
{
    function index(){


        return view('front.homepage');
    }   
}
