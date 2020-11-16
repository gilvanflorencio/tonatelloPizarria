<?php

namespace App\Http\Controllers;
use App\Model\Produto;
use Illuminate\Http\Request;


class indexController extends Controller
{
    public function index(){
        return view('index');
    }    

    public function pizzas(){
     
        $pizzas = Produto::join('categoria', 'categoria.id', '=', 'produto.categoria_id')
           ->select('produto.id','produto.nome','ingredientes','foto','valor')
           ->where('categoria_id', '=', 1)
           ->get();

        $fogazzas = Produto::join('categoria', 'categoria.id', '=', 'produto.categoria_id')
           ->select('produto.id','produto.nome','ingredientes','foto','valor')
           ->where('categoria_id', '=', 3)
           ->get();

        $esfihas = Produto::join('categoria', 'categoria.id', '=', 'produto.categoria_id')
           ->select('produto.id','produto.nome','ingredientes','foto','valor')
           ->where('categoria_id', '=', 2)
           ->get();
  
           return view('index', compact('pizzas', 'fogazzas','esfihas'));
  
         /* $produto = Produto::all();
          //dd($produto);
          return view('/pizzas',compact('produto'));
  
          $wines = Product::join('stock_products', 'products.id', '=', 'stock_products.products_id')
          ->select('products.id','name', 'photo', 'sale_price', 'categories_id')
          ->where('amount', '>', 0)->where('categories_id', '=', 1)
          ->get();*/
          
        }
  
      public function detalhePizza($id){
          $produto = Produto::find($id);
          return view('/detalhe', compact('produto'));
      }
      

}
