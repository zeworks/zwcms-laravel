<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountsController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.discounts.index');
    }

    public function newDiscount(){
        return view('admin.discounts.create');
    }

    public function editDiscount(){
        return view('admin.discounts.edit');
    }
}
