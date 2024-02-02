
@extends('layout')
@section('title','comunidades')
@section('content')



  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_comunidade.jpg');">
   <div class="overlay"></div>
   <div class="container">
     <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
       <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Comunidades <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Comunidades</h1>
        <a href="#comunidades"> <i  class="fa fa-angle-double-down fa-lg" style="color: white" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
 </section>

 <section id="comunidades" class="ftco-section">
   <div class="container">
     <div class="row d-flex">

        @foreach ( $comunidades as $comunidade )

        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
                <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('/storage/' . $comunidade->imagem_principal) }}'); border-radius:50px">
                </a>
            <div class="text" style="border-radius: 50px;">

                <h3 class="heading"><a href="#">{{  $comunidade->nome }}</a></h3>
                    <p>{{  $comunidade->titulo }}</p>
                    <p><a href="#" class="btn btn-primary">Ler mais</a></p>
                </div>
            </div>
         </div>

         @endforeach

    </div>
 <div class="row mt-5">
   <div class="col text-center">
        <div class="d-flex">
            {!! $comunidades->links() !!}
          </div>
   </div>
 </div>
 </div>
 </section>


 <script>
    $(document).ready(function() {
           // Rolar a tela para baixo até 500 pixels ao carregar a página
           $('html, body').animate({
               scrollTop: 615
           }, 2000); // 1000 é a duração da animação em milissegundos
       });
  </script>

 @endsection
