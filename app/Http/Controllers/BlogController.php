<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
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
        return view('admin.blog.index');
    }

    public function newBlog(){
        return view('admin.blog.create');
    }

    public function editBlog(){
        return view('admin.blog.edit');
    }
}
