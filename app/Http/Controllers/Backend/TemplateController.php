<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\WebsiteSettings;
use App\Templates;

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

    function insertNewTemplate(Request $request){
        $data = [
            "title" => $request -> input("username"),
            "status" => $request -> input("email_address"),
        ];

        Templates::save($data);

        return redirect(route("templates/new"))->with("message","Inserido com sucesso!");
    }

    public function editTemplate(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        // returns to the view with the website settings compacted
        return view('admin.templates.edit', compact('websitesettings'));
    }
}
