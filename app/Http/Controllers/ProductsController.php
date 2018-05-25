<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteSettings;

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
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        // returns to the view with the website settings compacted
        return view('admin.products.index', compact('websitesettings'));
    }

    public function newProduct(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        // returns to the view with the website settings compacted
        return view('admin.products.create', compact('websitesettings'));
    }

    public function editProduct(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        // returns to the view with the website settings compacted
        return view('admin.products.edit', compact('websitesettings'));
    }
}
