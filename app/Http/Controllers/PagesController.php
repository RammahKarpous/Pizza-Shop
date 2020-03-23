<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomPizza;
use App\Pizza;
use App\User;

class PagesController extends Controller {
    public function index() {

        return view( 'pages.index', [
            'pizzas'       => Pizza::where( 'id', '!==', '' )->get(),
            'customPizzas' => Pizza::where( 'user_id', '!=', '0' )->get()
        ] );
    }
}
