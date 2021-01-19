<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;  //così ho accesso a Car ora

class HomeController extends Controller
{
    public function index() {

        //Get data from DB
        $cars = Car::all();
        // dump($cars);

        return view('home', compact('cars'));
    }
}
