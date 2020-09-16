@extends('layouts.template')

@section('titulo') Esfihas @endsection

@section('conteudo')
    <link rel="stylesheet" href="/css/esfihas.css">

    <table class="table table-hover table-striped">
     <thead>
      <tr class="bg-danger">
        <th scope="col">Nº</th>      
        <th scope="col">Sabor</th>
        <th scope="col">Ingredientes</th>
        <th scope="col">Valor</th>
     </tr>
    </thead>

    
    @foreach ($esfihas as $esfiha )
   <tbody>
      <tr>
      <th scope="row">{{$esfiha->id}}</th>
        <td>{{$esfiha->nome}}</td>
        <td>{{$esfiha->ingredientes}}</td>
        <td>R$ {{number_format($esfiha->valor,2,',','.')}}</td>
     </tr>      
    </tbody>         
    @endforeach
  </table> 

@endsection