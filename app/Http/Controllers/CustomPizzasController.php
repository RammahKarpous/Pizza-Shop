<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomPizza;
use App\Topping;
use App\Size;

class CustomPizzasController extends Controller
{
    public function customPizza() {
        $toppings = Topping::all();
        $sizes = Size::all();

        return view('pizzas.create', [
            'toppings' => $toppings,
            'sizes' => $sizes
        ]);
    }

    public function add( Request $request ) {

    }
}
