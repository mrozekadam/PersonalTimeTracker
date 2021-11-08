<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    /**
     * Dash - Home view
     */
    public function index() 
    {
        return view('dashboard.home');
    }

    /**
     * Dash - All trackers
     */
    public function trackers() 
    {
        return view('dashboard.trackers');
    }

     /**
     * Dash - Reports view
     */
    public function reports() 
    {
        return view('dashboard.reports');
    }

     /**
     * Dash - Settings view
     */
    public function settings() 
    {
        return view('dashboard.settings');
    }
}
