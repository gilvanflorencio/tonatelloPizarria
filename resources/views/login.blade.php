@extends('layouts.template')

@section('titulo') Login @endsection

@section('conteudo')
    <link rel="stylesheet" href="/css/login.css">
    <main>
     <div class="container mt-5">
      <div class="row">
       <div class="offset-3 col-6 col-sm-6 col-md-6">
        <form action="/login" method="post" id="loginForm">
            @csrf
           <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div> 
        </div>
     </div>   
    </main>
@endsection
