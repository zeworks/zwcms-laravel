<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteSettings;

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
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        // returns to the view with the website settings compacted
        return view('admin.blog.index', compact('websitesettings'));
    }

    public function newBlog(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        // returns to the view with the website settings compacted
        return view('admin.blog.create', compact('websitesettings'));
    }

    public function editBlog(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        // returns to the view with the website settings compacted
        return view('admin.blog.edit', compact('websitesettings'));
    }
}
