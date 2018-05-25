<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteSettings;

class TemplateController extends Controller
{
    //
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        // returns to the view with the website settings compacted
        return view('admin.templates.index', compact('websitesettings'));
    }

    public function newTemplate(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        // returns to the view with the website settings compacted
        return view('admin.templates.create', compact('websitesettings'));
    }

    public function editTemplate(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        // returns to the view with the website settings compacted
        return view('admin.templates.edit', compact('websitesettings'));
    }
}
