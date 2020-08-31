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
    
    public function create(Request $request){
    $mensagem = [
      "required" => "O campo :attribute é obrigatorio",
      "numeric" => "Campo :attribute  é obrigatorio"
    ];
    
        $validatedData = $request->validate([
          'nome' => 'required|max:20|min:3',
          'ingredientes' => 'required',
          'valor'=>'numeric'
        ],$mensagem);
        
        //dd($request->foto);
    
       if($request->nome){
        if ($request->file('foto') == null) {
          $upload = "";
      }else{
        $upload = $request->foto->store('img');
      }                
       $novaPizza  = new Pizzas();
       $novaPizza->nome = $request->nome;
       $novaPizza->ingredientes = $request->ingredientes;
       $novaPizza->valor = $request->valor;
       $novaPizza->foto = "/file/$upload";
       
       $resultado = $novaPizza->save();   
       return redirect('/pizzas');
       }
      }

  public function deletePizza($id){
    $pizza = Pizzas::find($id);
    $pizza->delete();
    return redirect('/pizzas');
    }

    public function editPizza(Request $request){
      if ($request->foto) {
        $upload[] = explode(",", $pizza->foto);

        foreach ($request->foto as $img) {
            $upload[] = $img->store('img');
        }
        $stringToStore = implode(",", $upload);
        $pizza->foto = $stringToStore;
    }

      $novaPizza = Pizzas::find($request->id);
      $novaPizza->nome = $request->nome;
      $novaPizza->ingredientes = $request->ingredientes;
      $novaPizza->valor = $request->valor;
      $novaPizza->save();
      return redirect('/pizzas');
      }      
}
