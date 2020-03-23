<?php

namespace App\Http\Controllers;

use App\Size;
use Illuminate\Http\Request;
use App\Pizza;

class PizzasController extends Controller {
    public function pizza( $slug ) {

        return view( 'pizzas.pizza', [
            'pizza'         => Pizza::where( 'slug', $slug )->first(),
            'relatedPizzas' => Pizza::all()->where( 'slug', '!=', $slug ),
            'sizes'         => Size::all()
        ] );
    }
}
