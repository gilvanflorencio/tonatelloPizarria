<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/index.css') }}">
    <!--<link type="text/css" rel="stylesheet" href="{{ asset('css/home.css') }}">-->
    <link rel="stylesheet" href="slick-theme.css">
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&family=Great+Vibes&family=Sacramento&display=swap" rel="stylesheet">
    
     <title> @yield('titulo')</title>
  </head>

  <body>
    <header>
     
       <!-- Image and text -->

       <div class="container mt-2">
         <div class="row">
           <div class="col-md-6 col-sm-6 col-lg-6">
            <form class="input-group-prepend">
              <button class="input-group-text">Pesquisar</button>              
              <textarea class="form-control" aria-label="With textarea"></textarea>
            </form>
           </div>
        @auth 
         <div class="col-md-6 col-sm-6 col-lg-6">                        
          <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg> Olá,<b>{{ auth()->user()->name }}</b> 
         <div>      
        @endauth
         </div>
       </div>
      </div>
    </div> 
        <!-- Just an image -->
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
                  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav" id="m">  
              <li class="nav-item"><a class="nav-link" id="navTop" href="/">Tonatello</a></li>          
              <li class="nav-item"><a class="nav-link" id="navTop" href="#">Pizzas</a></li>
              <li class="nav-item"><a class="nav-link" id="navTop" href="#">Esfihas</a></li>
              <li class="nav-item"><a class="nav-link" id="navTop" href="#">Fogazzas</a></li>
              <li class="nav-item"><a class="nav-link" id="navTop" href="#">Lanches</a></li>
              <li class="nav-item"><a class="nav-link" id="navTop" href="#">Bebidas</a></li>
            </ul>
          </div>
        </nav>
    </header>

    <main>
     @yield('conteudo')
    </main>
    
      <footer class="container-fluid bg-success" id="footer">
        <div class="row">
          <div class="col">
            Categoria
          </div>
          <div class="col">
            Ajuda
          </div>
          <div class="col">
            Nossas Redes Sociais
          </div>
          <div class="col">
            Telefones
          </div>
        </div>
        <div class="row">
          <div class="col">
            <ul id="linkSite">              
            <li><a href="#">Pizzas</a></li>
            <li><a href="#">Esfihas</a></li>
            <li><a href="#">Fogazzas</a></li>
            <li><a href="#">Lanches</a></li>
          </ul>
          </div>
          <div class="col">
          <ul id="linkSite">
            <li><a href="#">Quem Somos</a></li>
            <li><a href="#">Minha Conta</a></li>
            <li><a href="#">Política de Entrega</a></li>
            <li><a href="#">Troca e Devoluções</a></li>
          </div>
        </ul>
          <div class="col">
            <ul id="linkSite">
              <li><img src="/img/facebook_108044.png" alt="FACEBOOK"><a href="#">  FACEBOOK</a></li>
              <li><img src="/img/instagram_108043.png" alt="INSTAGRAM"><a href="#">  INSTAGRAM</a></li>
            </ul>
          </div>
          <div class="col">
           <ul id="linkSite">
            <li><img src="/img/whatsapp_108042.png" alt="WHATSAPP"><a href="#">  95148-4615</a></li>
             <li><img src="/img/telefones.png" alt=""><a href=""> 2036-0155</a></li>
          </ul>
          </div>
       </div>
      </footer>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
     integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
       
    
  </body>
</html>