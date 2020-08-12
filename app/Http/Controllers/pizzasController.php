<?php

namespace App\Http\Controllers;
use App\Model\Pizzas;
use Illuminate\Http\Request;

class PizzasController extends Controller
{
    public function pizzas(){
        $pizzas = Pizzas::all();
        return view('/pizzas',compact('pizzas'));
    }

    public function detalhePizza($id){
        $pizza = Pizzas::find($id);
        return view('/detalhe', compact('pizza'));
    }
}
