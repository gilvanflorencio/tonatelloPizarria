<?php

namespace App\Http\Controllers;

use App\Model\Produto;
use App\Model\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FogazzasController extends Controller
{
    public function fogazzas(){
     
        $fogazzas = Produto::join('categoria', 'categoria.id', '=', 'produto.categoria_id')
           ->select('produto.id','produto.nome','ingredientes','foto','valor')
           ->where('categoria_id', '=', 3)
           ->get();
  
          return view('/fogazzas', compact('fogazzas'));           
        }
}
