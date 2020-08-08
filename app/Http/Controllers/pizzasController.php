<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pizzasController extends Controller
{
    public function pizzas(){
        return view('/pizzas');
    }
}
