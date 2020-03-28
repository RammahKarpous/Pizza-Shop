<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomPizza;
use App\Pizza;
use App\User;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Support\Facades\Auth;

class PagesController extends Controller {
    public function index() {

        $user_id = auth()->user( 'id' );

        if (Auth::check()) {
            return view( 'pages.index', [
                'pizzas'       => Pizza::whereNull( 'user_id' )->get(),
                'customPizzas' => Pizza::where( 'user_id', Auth::user()->id )->get()
            ] );
        } else {
            return view( 'pages.index', [
                'pizzas'       => Pizza::whereNull( 'user_id' )->get()
            ] );
        }

    }
}
