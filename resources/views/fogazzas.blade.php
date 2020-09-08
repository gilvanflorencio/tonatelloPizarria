
@extends('layouts.template')

@section('titulo')Fogazzas @endsection

@section('conteudo')    
<link rel="stylesheet" href="./css/fogazzas.css">

<style>
  #margem{
    margin:10px auto auto 10px;
  }
 </style>

    <section id="margem">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  <h6>FOGAZZAS ASSADAS</h6>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><h6>FOGAZZA ASSADAS</h6><hr></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       @foreach ($fogazzas as $fogazza)          
                
       https://getbootstrap.com/docs/4.5/components/modal/

       continuar com DIVS a Lista no Modal
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
      