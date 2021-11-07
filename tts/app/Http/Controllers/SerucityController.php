<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerucityController extends Controller
{
    /**
     * SecurityController:index() -> Login page
     */
    public function index() 
    {
        return view('login.index');
    }
}
