
@extends('layout')
@section('title','depoimentos')
@section('content')


<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
         <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Fale Conosco <i class="fa fa-chevron-right"></i></span></p>
         <h1 class="mb-0 bread">Fale Conosco</h1>
         <a href="#fale_conosco"> <i  class="fa fa-angle-double-down fa-lg" style="color: white" aria-hidden="true"></i></a>
       </div>
     </div>
   </div>
  </section>

  <section id="fale_conosco" class="ftco-section ftco-no-pb contact-section mb-4">
    <div class="container">
      <div class="row d-flex contact-info">

     <div class="col-md-6 d-flex">
       <div class="align-self-stretch box p-4 text-center">
        <div class="icon d-flex align-items-center justify-content-center">
         <span class="fa fa-whatsapp"></span>
       </div>
       <h3 class="mb-2">CLIQUE PARA FALAR CONOSCO</h3>
       <p><a href="tel://1234567920">(92) 9497-3719</a></p>
     </div>
   </div>
   <div class="col-md-6 d-flex">
     <div class="align-self-stretch box p-4 text-center">
      <div class="icon d-flex align-items-center justify-content-center">
       <span class="fa fa-paper-plane"></span>
     </div>
     <h3 class="mb-2">CONTATE-NOS PELO</h3>
     <p><a href="mailto:info@yoursite.com">contato@tchibum.com.br</a></p>
   </div>
  </div>

  </div>
  </div>
  </section>

  <section class="ftco-section contact-section ftco-no-pt">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 order-md-last d-flex">
          <form action="#" class="bg-light p-5 contact-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>

        <div class="col-md-6 d-flex">
         <div id="map" class="bg-white"></div>
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
