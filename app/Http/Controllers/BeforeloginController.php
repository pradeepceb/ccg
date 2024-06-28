<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeforeloginController extends Controller
{
    public function rgister_signup()
    {
        return view('register_login');
    }
}
