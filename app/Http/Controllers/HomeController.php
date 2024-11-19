<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home page';
        return view('home.home', compact('title'));
    }

    public function login(){
        return view('home.login');
    }
}
