
@extends('layout')
@section('title','depoimentos')
@section('content')


<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('https://static1.s123-cdn-static-a.com/uploads/8711250/2000_655d4b81491b7.jpg?width=1200');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
           <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Depoimentos<i class="fa fa-chevron-right"></i></span></p>
           <h1 class="mb-0 bread">Depoimentos</h1>
          <a href="#depoimentos"> <i  class="fa fa-angle-double-down fa-lg" style="color: white" aria-hidden="true"></i></a>
       </div>
   </div>
  </div>
  </section>
  


  <section id="depoimentos" class="ftco-section">
    <div  class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
            @foreach ($depoimentos as $depoimento)
            <div  class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <p class="{{ $depoimento->id }}">
                  
                  </p>
                  <p class="mb-4">{{  $depoimento->depoimento }}</p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url({{$depoimento->foto}})"></div>
                    <div class="pl-3">
                      <p class="name">{{  $depoimento->nome }}</p>
                      <span class="position">{{  $depoimento->ocupação }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach  
          </div>

          <div class="d-flex">
            {!! $depoimentos->links() !!}
          </div>

        </div>
      </div>
  </section>


  <style scoped>

    #depoimentos{
      margin-top: -60px;
    }
  </style>

  <script>
     $(document).ready(function() {
            // Rolar a tela para baixo até 500 pixels ao carregar a página
            $('html, body').animate({
                scrollTop: 500
            }, 2000); // 1000 é a duração da animação em milissegundos
        });
  </script>
  
  
{{--   <section class="ftco-intro ftco-section ftco-no-pt">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-12 text-center">
            <div class="img"  style="background-image: url(images/bg_2.jpg);">
               <div class="overlay"></div>
               <h2>We Are Pacific A Travel Agency</h2>
               <p>We can manage your dream building A small river named Duden flows by their place</p>
               <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
           </div>
       </div>
   </div>
  </div>
  </section> --}}
  

  
  
  
  @endsection