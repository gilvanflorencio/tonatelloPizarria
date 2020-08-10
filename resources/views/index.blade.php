@extends('layouts.template')

@section('titulo')Home @endsection

@section('conteudo')    
<link rel="stylesheet" href="./css/pizzas.css">
 
    <section>
      @foreach ($pizzas as $pizza)
          
      
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="/img/atum-1.jpg" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$pizza->nome}}</h5>
            <p class="card-text">{{$pizza->ingredientes}}</p>
            <p class="card-text">{{$pizza->valor}}</p>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Escolha o Sabor
                </button>                   
            </div>
          </div>
        </div>
      </div>
      @endforeach
       <!-- Button trigger modal -->
      
              <!-- Modal  -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Sabor Pizzas</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
       ...
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <button type="button" class="btn btn-primary">Save changes</button>
     </div>
   </div>
 </div>
</div>   
</section>
    @endsection
      