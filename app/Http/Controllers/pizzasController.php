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

    public function AreaCadastrar(){
        return view('cadastrarPizza');
    }

  public function cadastrarPizza(Request $request)
  { //dd($request->data);
   if($request->nome){
   $novaPizza  = new Pizzas();
   $novaPizza->nome = $request->nome;
   $novaPizza->ingredientes = $request->ingredientes;
   $novaPizza->valor = $request->valor;
   

   $retorno = $novaPizza->save();   
   return redirect('/pizzas');
   }
  }

}
