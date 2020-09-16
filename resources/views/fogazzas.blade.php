
@extends('layouts.template')

@section('titulo')Fogazzas @endsection

@section('conteudo')    
<link rel="stylesheet" href="./css/fogazzas.css">

<style>
  #margem{
    margin:10px auto auto 10px;
    }
  #borda{
    border-bottom: 1px solid gray;
    /*text-align:start;*/
    padding: 5px;
    font-family: 'Raleway', sans-serif;
    text-transform: lowercase;
    text-transform: capitalize;
  }
  #valor{
    text-align: end;
    border-bottom: 1px solid gray;
    font-weight: bold;
    font-family: 'Grandstander', cursive;
  }
 </style>

    <section id="margem">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  <h5>FOGAZZAS ASSADAS</h5>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-lg modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel">FOGAZZA ASSADAS</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       @foreach ($fogazzas as $fogazza)          
          <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4 col-4" id="borda">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-dash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    <path fill-rule="evenodd" d="M6 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                  </svg>  
                      <span>  0  </span>
                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                 </svg>
                 {{$fogazza->nome}}  
              </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-4" id="borda">
                  {{$fogazza->ingredientes}}
                </div> 
                <div class="col-sm-4 col-md-4 col-lg-4 col-4" id="valor">
                  {{number_format($fogazza->valor,2,',','.')}}
                </div>
              </div>        
         @endforeach
        
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>        
    </div>
    </div>
  </div>
</div>
   </section>
    @endsection
      