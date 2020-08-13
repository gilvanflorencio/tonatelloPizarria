@extends('layouts.template')

@section('titulo')Cadastrar Pizzas @endsection

@section('conteudo')

<section>

    <form  method="POST" action="" style="width: 400px;margin:10px auto 10px auto;" >
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

        
        <button type="submit" class="btn btn-primary" name="button">Submit</button>
      </form>
    @if(@isset($resultado))
          @if($resultado)
   <h1>Pizza Cadastrada com Sucesso!</h1>
        @else
        <h1>Erro ao Cadastrar Pizza</h1>
        @endif
      @endif
    </section>
    
@endsection