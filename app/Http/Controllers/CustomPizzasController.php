<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomPizzasController extends Controller
{
    public function customPizza() {
        return view('pizzas.create');
    }
}
