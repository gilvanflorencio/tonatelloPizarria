@extends('layouts.template')

@section('titulo')Detalhes @endsection

@section('conteudo')    
<link rel="stylesheet" href="./css/pizzas.css">
<style>
 #margem{
   margin:10px auto auto 10px;
 }
</style>
 
    <section>
        <div class="card mb-4 col-6 col-sm-6" id="margem" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4 col-6 col-sm-6">
              <img src="{{$pizzas->foto}}" class="card-img" alt="{{$pizzas->nome}}">
              </div>
              <div class="col-md-6 col-6 col-sm-6">
                <div class="card-body">
                  <h5 class="card-title">{{$pizzas->nome}}</h5>
                <p class="card-text">{{$pizzas->ingredientes}}</p>
                <p class="card-text">{{$pizzas->valor}}</p>
                <button><a href="/pizzas">Voltar</a></button>                 
                </div>
              </div>
            </div>
          </div>
       
          
   </section>
    @endsection
      