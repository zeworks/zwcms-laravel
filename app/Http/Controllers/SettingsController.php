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

    public function accountSettings(){
        return view('admin.setting.account');
    }

    public function shippingSettings(){
        return view('admin.setting.shipping');
    }
}
