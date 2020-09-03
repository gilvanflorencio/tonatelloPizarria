<?php

namespace App\Http\Controllers;

use App\Model\Produto;
use App\Model\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProdutosController extends Controller
{
    public function pizzas(){
        $produto = Produto::all();
        //dd($produto);
        return view('/pizzas',compact('produto'));
    }

    public function detalhePizza($id){
        $produto = Produto::find($id);
        return view('/detalhe', compact('produto'));
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
       $novaPizza  = new Produto();
       $novaPizza->nome = $request->nome;
       $novaPizza->ingredientes = $request->ingredientes;
       $novaPizza->valor = $request->valor;
       $novaPizza->categoria_id = $request->categoria_id;
       $novaPizza->foto = "/file/$upload";
       
       $resultado = $novaPizza->save();   
       return redirect('/pizzas');
       }
      }

  public function deletePizza($id){
    $produto = Produto::find($id);
    $produto->delete();
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

      $novaPizza = Produto::find($request->id);
      $novaPizza->nome = $request->nome;
      $novaPizza->ingredientes = $request->ingredientes;
      $novaPizza->valor = $request->valor;
      $novaPizza->save();
      return redirect('/pizzas');
      }
}






