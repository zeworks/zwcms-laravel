<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banners;

class BannersController extends Controller
{
    function index(){
        return view('banners');
    }
}
