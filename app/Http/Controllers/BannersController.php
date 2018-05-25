<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteSettings;
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
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        // returns to the view with the website settings compacted
        return view('admin.banners.index', compact('websitesettings'));
    }

    public function newBanner(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        return view('admin.banners.create', compact('websitesettings'));
    }

    public function editBanner(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        return view('admin.banners.edit', compact('websitesettings'));
    }
}
