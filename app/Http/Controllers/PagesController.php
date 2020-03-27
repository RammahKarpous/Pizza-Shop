<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomPizza;
use App\Pizza;
use App\User;

class PagesController extends Controller {
    public function index() {

        $user_id = auth()->user('id');

        return view( 'pages.index', [
            'pizzas'       => Pizza::whereNull('user_id')->get(),
            'customPizzas' => Pizza::where( 'user_id', '==', $user_id )->get()
        ] );
    }
}
