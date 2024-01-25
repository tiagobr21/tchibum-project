@extends('layout')
@section('title','sobre')
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
        <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Sobre nós <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Sobre nós</h1>
        <a href="#sobre"> <i  class="fa fa-angle-double-down fa-lg" style="color: white" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
 </section>

 <section id="sobre" class="ftco-section services-section">
   <div class="container">
     <div class="row d-flex">
       <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
        <div class="w-100">
         <span class="subheading">Nossa Paixão pelo Turismo</span>
         <h2 class="mb-4">SOBRE</h2>
         <p>O Turismo de Base Comunitária é uma maneira de promover um turismo mais justo, fazendo com que os moradores da comunidade sejam os protagonistas dessa aventura, além de promover sustentabilidade socioambiental nas atividades oferecidas.</p>
         <p>A Tchibum na Amazônia é uma startup voltada para o turismo sustentável e busca influenciar pessoas a conhecer a Amazônia através de vivências em bases comunitárias apoiando ribeirinhos e incentivando qualidade de vida e fonte de renda alternativa praticando princípios ESG.</p>
       </div>
     </div>
     <div class="col-md-6">
      <div class="row">
       <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
         <div class="services services-1 color-1 d-block img" style="background-image: url('https://static1.s123-cdn-static-a.com/uploads/8711250/2000_655d49316c27c.jpg?width=1600');">
           <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-paragliding"></span></div>
           <div class="media-body">
             <h3 class="heading mb-3">AGROVILA</h3>
             <p class="descricao_atividade_comunidade">Seja bem-vindo à Comunidade Agorvila, localizada no Tarumã-mirim, cerca de 40 minutos de Manaus.</p>
           </div>
         </div>
       </div>
       <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
         <div class="services services-1 color-2 d-block img" style="background-image: url('https://static1.s123-cdn-static-a.com/uploads/8711250/400_655d4775595ee.jpg');">
           <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
           <div class="media-body">
             <h3 class="heading mb-3">TRÊS UNIDOS</h3>
             <p class="descricao_atividade_comunidade">Esta é uma comunidade dos Povos Indígenas Kambeba, etnia originária das fronteiras do Brasil com os países andinos. </p>
           </div>
         </div>
       </div>
       <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
         <div class="services services-1 color-3 d-block img" style="background-image: url('https://static1.s123-cdn-static-a.com/uploads/8711250/800_655d4931d2c83.jpg?width=600');">
           <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tour-guide"></span></div>
           <div class="media-body">
             <h3 class="heading mb-3">EXPERIÊNCIA RIO NEGRO</h3>
             <p class="descricao_atividade_comunidade">Experimente a magia da Amazônia com a 'Experiência Rio Negro', o melhor refúgio de aventura.</p>
           </div>
         </div>
       </div>
       <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
         <div class="services services-1 color-4 d-block img" style="background-image: url('https://static1.s123-cdn-static-a.com/uploads/8711250/800_655d51a42085a.jpg');">
           <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-map"></span></div>
           <div class="media-body">
             <h3 class="heading mb-3">INTERCÂMBIO EDUCACIONAL</h3>
             <p class="descricao_atividade_comunidade">É um programa abrangente de intercâmbio baseado em educação, projetado para integrar a aprendizagem e a consciência cultural.</p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 </div>
 </section>

 <div class="col-md-12 ftco-animate pb-5 text-center">
 <a href="#video"> <i  class="fa fa-angle-double-down fa-lg" style="color: black" aria-hidden="true"></i></a>
 </div>


 <section id="video" class="ftco-section ftco-about img" style="background-image: url(images/por-do-sol.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  ">
  <div class="overlay"></div>
  <div class="container py-md-5">
    <div class="row py-md-5">
      <div class="col-md d-flex align-items-center justify-content-center">
        <a href="https://vimeo.com/45830194"
          class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
          <span class="fa fa-play"></span>
        </a>
      </div>
    </div>
  </div>
</section>





<script>
  $(document).ready(function() {
         // Rolar a tela para baixo até 500 pixels ao carregar a página
         $('html, body').animate({
             scrollTop: 700
         }, 2000); // 1000 é a duração da animação em milissegundos
     });
</script>


 @endsection
