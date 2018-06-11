<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\WebsiteSettings;

class NotificationsController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $websitesettings = WebsiteSettings::get();

        return view('admin.notifications.index', compact('websitesettings'));
    }

    function newNotification(){
        $websitesettings = WebsiteSettings::get();
        return view('admin.notifications.create', compact('websitesettings'));
    }

    public function editNotification(){
        $websitesettings = WebsiteSettings::get();
        return view('admin.notifications.edit', compact('websitesettings'));
    }
}
