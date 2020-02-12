<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomPizza;
use App\Pizza;

class PagesController extends Controller {
    public function index() {

        $customPizzas = CustomPizza::all();
        $pizzas       = Pizza::all();

        return view( 'pages.index', [
            'customPizzas' => $customPizzas,
            'pizzas'       => $pizzas
        ] );
    }
}
