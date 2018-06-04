<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\WebsiteSettings;
use App\Http\Controllers\Controller;
use App\Banners;
use App\Templates;



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

        $websiteBanners = Banners::get();
        
        // returns to the view with the website settings compacted
        return view('admin.banners.index', compact('websitesettings','banners'));
    }

    public function newBanner(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        
        //to get templates to list on selectbox
        $templates = Templates::get();
        
        return view('admin.banners.create', compact('websitesettings','templates'));
    }

    public function editBanner(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();

        //to get templates to list on selectbox
        $templates = Templates::get();
        
        return view('admin.banners.edit', compact('websitesettings','templates'));
    }
}
