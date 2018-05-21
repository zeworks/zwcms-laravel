<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
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

    public function index(){
        return view('admin.products.index');
    }

    public function newProduct(){
        return view('admin.products.create');
    }

    public function editProduct(){
        return view('admin.products.edit');
    }
}
