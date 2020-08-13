@extends('layouts.template')

@section('titulo') Pizzas @endsection

@section('conteudo')
    <link rel="stylesheet" href="/css/pizzas.css">

<table class="table">
    <thead>
      <tr>
        <th scope="col">Nº</th>
        <th scope="col">Sabor</th>
        <th scope="col">Ingredientes</th>
        <th scope="col">Valor</th>
        <th>Saiba Mais</th>
      </tr>
    </thead>

@foreach ($pizzas as $pizza)
   <tbody>
      <tr>
      <th scope="row">{{$pizza->id}}</th>
        <td>{{$pizza->nome}}</td>
        <td>{{$pizza->ingredientes}}</td>
        <td>R$ {{number_format($pizza->valor,2,',','.')}}</td>
        <td><a href="/detalhe/{{$pizza->id}}"> Detalhe</a></td>
      </tr>      
    </tbody>   
    @endforeach

  </table>
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/cadastrarPizza">Cadastrar Nova Pizza</a>

  

@endsection