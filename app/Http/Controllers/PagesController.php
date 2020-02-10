<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomPizza;

class PagesController extends Controller
{
    public function index() {

        $customPizzas = CustomPizza::all();

        return view('pages.index', [
            'customPizzas' => $customPizzas
        ]);
    }
}
