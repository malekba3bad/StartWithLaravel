<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function asd1()
    {
        return view('welcome');
    }
    public function age2()
    {
        return "this is age2";
    }

    public function get_login()
    {
        return view('loginPages.login');
    }
}
