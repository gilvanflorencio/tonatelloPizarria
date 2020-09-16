<?php

namespace App\Http\Controllers;

use App\Model\Produto;
use App\Model\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EsfihasController extends Controller
{
    public function esfihas(){
     
        $esfihas = Produto::join('categoria', 'categoria.id', '=', 'produto.categoria_id')
           ->select('produto.id','produto.nome','ingredientes','foto','valor')
           ->where('categoria_id', '=', 2)
           ->get();
  
          return view('/esfihas', compact('esfihas'));
           
        }
}
