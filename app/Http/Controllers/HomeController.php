<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Maker;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
       $cars= Car::where('published_at', '<', now())->orderBy('published_at', 'desc')->limit(30)->get();

       $title = 'Home';

       //dd($cars);

        return view('home.home', compact('title', 'cars'));
    }

    
}
