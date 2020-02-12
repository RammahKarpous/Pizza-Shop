<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzasController extends Controller {
    public function pizza( $slug ) {
        $pizza = Pizza::where( 'slug', $slug )->first();

        return view( 'pizzas.pizza', [
            'pizza' => $pizza
        ] );
    }
}
