<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        $car = Car::findOrFail(1);

        dd($car->carType);

        return view('home.home', compact('title', 'car'));
    }

    
}
