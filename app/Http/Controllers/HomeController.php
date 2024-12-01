<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cars= Car::get();

        $title = 'Home';
        return view('home.home', compact('title', 'cars'));
    }

    
}
