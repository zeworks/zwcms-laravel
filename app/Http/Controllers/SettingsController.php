<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteSettings;


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
        
        $websitesettings = WebsiteSettings::get();

        return view('admin.setting.general', compact('websitesettings'));
    }

    public function updateWebsite(Request $request){

        $data = [
            "website_name" => $request -> input('platform_name'),
            "website_account_email" => $request -> input('account_email'),
            "website_legal_name" => $request -> input('legal_name_business')
        ];

        WebsiteSettings::where('id',1)->update($data);

        return view('admin.setting.general');
    }

    public function accountSettings(){
        return view('admin.setting.account');
    }

    public function shippingSettings(){
        return view('admin.setting.shipping');
    }
}
