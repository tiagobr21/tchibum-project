@extends('layout')
@section('title','post')
@section('content')



<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(images/por-do-sol.jpg);
background-position: center;
background-repeat: no-repeat;
background-size: cover;
">
 <div class="overlay"></div>
 <div class="container">
   <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
     <div class="col-md-9 ftco-animate pb-5 text-center">
     
    </div>
  </div>
</div>
</section>

<section class="ftco-section ftco-about ftco-no-pt img">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-12 about-intro">
        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="img d-flex w-100 align-items-center justify-content-center"
              style="background-image:url(http://localhost/storage/{{ $post->imagem_principal }});">

            </div>
          </div>
          <div class="col-md-6 pl-md-5 py-5">
            <div class="row justify-content-start pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                <!-- <span class="subheading">About Us</span> -->
                <h2 class="mb-4">{{ $post->titulo }}</h2>
                <p>{{  $post->conteudo }}</p>
                <!-- <p><a href="#" class="btn btn-primary">Book Your Destination</a></p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  $(document).ready(function() {
         // Rolar a tela para baixo até 500 pixels ao carregar a página
         $('html, body').animate({
             scrollTop: 500
         }, 2000); // 1000 é a duração da animação em milissegundos
     });
</script> 

@endsection






