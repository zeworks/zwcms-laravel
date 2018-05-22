<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.setting.index');
    }

    public function generalSettings()
    {
        return view('admin.setting.general');
    }

    public function updateWebsite(Request $request){
        // return view('admin.setting.account');
        $this->validate($request, [
            'platform_name' => 'required'
        ]);

        // create post
        $post = new WebsiteSettings;
        $post->title = $request -> input('platform_name');
        $post->save();

        return redirect('admin.setting.general')->with('success', 'Guardado com sucesso!');
    }

    public function accountSettings(){
        return view('admin.setting.account');
    }

    public function shippingSettings(){
        return view('admin.setting.shipping');
    }
}
