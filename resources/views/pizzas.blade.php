@extends('layouts.template')

@section('titulo') Pizzas @endsection

@section('conteudo')
    <link rel="stylesheet" href="/css/pizzas.css">

    <table class="table table-hover">
     <thead>
      <tr class="bg-danger">
        <th scope="col">Nº</th>
        <th scope="col">Sabor</th>
        <th scope="col">Ingredientes</th>
        <th scope="col">Valor</th>
        <th>Saiba Mais</th>
      </tr>
    </thead>

    @foreach ($pizzas as $pizza )
   <tbody>
      <tr class="table-light">
      <th scope="row">{{$pizza->id}}</th>
        <td>{{$pizza->nome}}</td>
        <td>{{$pizza->ingredientes}}</td>
        <td>R$ {{number_format($pizza->valor,2,',','.')}}</td>
      <td>
        <a href="/detalhe/{{$pizza->id}}">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrows-fullscreen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M1.464 10.536a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3.5a.5.5 0 0 1-.5-.5v-3.5a.5.5 0 0 1 .5-.5z"/>
          <path fill-rule="evenodd" d="M5.964 10a.5.5 0 0 1 0 .707l-4.146 4.147a.5.5 0 0 1-.707-.708L5.257 10a.5.5 0 0 1 .707 0zm8.854-8.854a.5.5 0 0 1 0 .708L10.672 6a.5.5 0 0 1-.708-.707l4.147-4.147a.5.5 0 0 1 .707 0z"/>
          <path fill-rule="evenodd" d="M10.5 1.5A.5.5 0 0 1 11 1h3.5a.5.5 0 0 1 .5.5V5a.5.5 0 0 1-1 0V2h-3a.5.5 0 0 1-.5-.5zm4 9a.5.5 0 0 0-.5.5v3h-3a.5.5 0 0 0 0 1h3.5a.5.5 0 0 0 .5-.5V11a.5.5 0 0 0-.5-.5z"/>
          <path fill-rule="evenodd" d="M10 9.964a.5.5 0 0 0 0 .708l4.146 4.146a.5.5 0 0 0 .708-.707l-4.147-4.147a.5.5 0 0 0-.707 0zM1.182 1.146a.5.5 0 0 0 0 .708L5.328 6a.5.5 0 0 0 .708-.707L1.889 1.146a.5.5 0 0 0-.707 0z"/>
          <path fill-rule="evenodd" d="M5.5 1.5A.5.5 0 0 0 5 1H1.5a.5.5 0 0 0-.5.5V5a.5.5 0 0 0 1 0V2h3a.5.5 0 0 0 .5-.5z"/>
          </svg>
        </a> 
        <a href="/deletePizza/{{$pizza->id}}"> 
         <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
         <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
         </svg>
        </a>
      <a href="/editPizza/">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
            <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
          </svg>
        </a>
     </td>
      </tr>      
    </tbody>   
    @endforeach  
  </table>
  
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
  Cadastrar Pizza
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Pizza</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  method="post" action="" style="width: 400px;margin:10px auto 10px auto;" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="nome">Nome Pizza</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da Pizza">
            </div>
            <div class="form-group">
              <label for="ingredientes">Ingredientes</label>
              <input type="text" class="form-control" id="ingredientes" name="ingredientes" placeholder="Ingredientes">
            </div>
            <div class="form-group">
              <label for="valor">Valor</label>
              <input type="number" class="form-control" id="valor" name="valor" placeholder="Valor">
            </div>
           
              <div class="form-group">
                <label for="foto">Carrega Foto</label>
                <input type="file" class="form-control-file" id="foto" name="foto">
              </div>
                   
          <button type="submit" class="btn btn-primary" name="button">Submit</button>
        </form>  
       
      </div>
      
    </div>
  </div>
</div>
  

@endsection