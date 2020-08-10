<?php

namespace App\Http\Controllers;
use app\Model\pizzas;
use Illuminate\Http\Request;

class PizzasController extends Controller
{
    public function pizzas(){
        $pizzas = Pizzas::all();
        return view('/pizzas',compact('pizzas'));
    }
}
