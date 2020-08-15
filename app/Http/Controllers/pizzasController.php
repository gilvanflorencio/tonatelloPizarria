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
        $pizzas = Pizzas::find($id);
        return view('/detalhe', compact('pizzas'));
    }
    
  public function CreatePizza(Request $request){
$mensagem = [
  "required" => "O campo :attribute é obrigatorio",
  "numeric" => "Campo :attribute  é obrigatorio"
];

    $validatedData = $request->validate([
      'nome' => 'required|max:20|min:3',
      'ingredientes' => 'required',
      'valor'=>'numeric'
    ],$mensagem);
    
    //dd($request->data);

   if($request->nome){
   $upload = $request->foto->store('img');
   $novaPizza  = new Pizzas();
   $novaPizza->nome = $request->nome;
   $novaPizza->ingredientes = $request->ingredientes;
   $novaPizza->valor = $request->valor;
   $novaPizza->$request->foto = "/file/$upload";   

   $resultado = $novaPizza->save();   
   return view("/createPizza",['resultado'=>$resultado]);
   }
  }

  public function deletePizza($id){
    $pizza = Pizzas::find($id);
    $pizza->delete();
    return redirect()->action("pizzasController@pizzas");
  }

}
