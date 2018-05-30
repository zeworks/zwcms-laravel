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

        // to include template data
        $templatedata = Templates::get();

        // returns to the view with the website settings compacted
        return view('admin.templates.index', compact('websitesettings','templatedata'));
    }

    public function newTemplate(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        // returns to the view with the website settings compacted
        return view('admin.templates.create', compact('websitesettings'));
    }

    function insertNewTemplate(Request $request){
        $path = $request->file('upload_banner')->store('images');

        $data = [
            "title" => $request -> input("title"),
            "status" => $request -> input("status_item"),
            "featured_image" => $path
        ];

        Templates::insert($data);

        return redirect()->back()->with("message","Inserido com sucesso!");
    }

    public function editTemplate($id){
        // to include website settings
        $websitesettings = WebsiteSettings::get();

        // to include template data
        $templatedata = Templates::find($id);

        // returns to the view with the website settings compacted
        return view('admin.templates.edit', compact('websitesettings','templatedata'));
    }
}
