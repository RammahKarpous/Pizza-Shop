<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomPizza;

class CustomPizzasController extends Controller
{
    public function customPizza() {
        return view('pizzas.create');
    }

    public function add( Request $request ) {
        
    }
}
