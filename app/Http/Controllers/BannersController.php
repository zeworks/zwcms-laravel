<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banners;

class BannersController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index(){
        return view('admin.banners.index');
    }

    public function newBanner(){
        return view('admin.banners.create');
    }
}
