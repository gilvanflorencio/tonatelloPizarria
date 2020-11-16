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
              <img src="{{$produto->foto}}" class="card-img" alt="{{$produto->nome}}">
              </div>
              <div class="col-md-6 col-6 col-sm-6">
                <div class="card-body">
                  <h5 class="card-title">{{$produto->nome}}</h5>
                <p class="card-text">{{$produto->ingredientes}}</p>
                <p class="card-text">{{$produto->valor}}</p>
                <a class="btn btn-primary" href="/" role="button">Voltar</a>                
                </div>
              </div>
            </div>
          </div>
       
          
   </section>
    @endsection
      