<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSettingsStaffRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }
    
    public function index()
    {
        return view('admins.admin_settings_staff_request');
    }
}
