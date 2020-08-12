@extends('layouts.template')

@section('titulo')Home @endsection

@section('conteudo')    
<link rel="stylesheet" href="/css/home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <section class="container">    
      <div class="center container">
        <div><img src="img/imgSlide/pizzameia.jpg" alt="pizza" /></div>
        <div><img src="img/imgSlide/fogazza.jpeg" alt="fogazza" /></div>
        <div><img src="img/imgSlide/esfiha.jpeg" alt="esfiha" /></div>
        <div><img src="img/imgSlide/batata.jpg" alt="batata" /></div>
        <div><img src="img/imgSlide/beiruthe.jpg" alt="beiruthe" /></div>
        <div><img src="img/imgSlide/esfihaDoce.jpg" alt="Doce" /></div>
        <div><img src="img/imgSlide/lanche.jpg" alt="lanche" /></div>  
      </div>

           
         <div class="row">
            <div class="col-md-6">

              <div class="card mb-3" style="max-width: 450px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="img/delivery.jpg" class="card-img" alt="Delivery">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h5 class="card-title">Delivery</h5>
                      <p class="card-text"></p>
                    </div>
                  </div>
                </div>
              </div>

                <h5 class="text-center">Aplicativo Tonatello</h5>
                <p>Estamos sempre evoluindo e procurando novas formas de atender nossos clientes.
                   Para isso criamos um aplicativo da Tonatello, pensado exclusivamente para você.
                    Nele você consegue realizar seus pedidos de forma personalizada e garante pontos de vantagens para trocar por produtos.</p>
                    <button class="btn btn-warning btn-lg" id="botao"><a href="https://deliveryapp.neemo.com.br/delivery/6002/menu">Faça Seu Pedido</a></button>
            </div>
            <div class="col-md-6">
                <img src="img/banner.jpg" class="banner" alt="">
            </div>
         </div>
      

    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    
    
   
<script type="text/javascript">
  $('.center').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>

 @endsection
  
   