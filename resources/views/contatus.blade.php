
@extends('layout')
@section('title','depoimentos')
@section('content')


<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_faleconosco.jpg');">
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

        <div class="col-md-12 d-flex">
            <div class="info box2 p-4 text-center">
               <p > Precisa de orientação ou tirar alguma <br> dúvida? Estamos à disposição </p>
            </div>
        </div>

        </div>
        </div>
  </section>

  <section id="fale_conosco" class="ftco-section ftco-no-pb contact-section mb-4">
    <div class="container">

      <div class="row d-flex contact-info">

     <div id="whatsapp" class="col-md-6 d-flex">
       <div  id="block" class="align-self-stretch box p-4 text-center">
        <div id="gerarLink" class="icon d-flex align-items-center justify-content-center">
         <span class="fa fa-whatsapp"></span>
       </div>
       <h3 class="mb-2"><a id="gerarLink" >CLIQUE PARA FALAR CONOSCO</a></h3>
     </div>
   </div>
   <div  class="col-md-6 d-flex">
     <div id="block" class="align-self-stretch box p-4 text-center">
      <div class="icon d-flex align-items-center justify-content-center">
       <span class="fa fa-paper-plane"></span>
     </div>
     <h3 class="mb-2">CONTATE-NOS PELO</h3>
     <p><a href="mailto:info@yoursite.com">{{ $contato->email }}</a></p>
   </div>
  </div>

  </div>
  </div>
  </section>

  <section id="fale_conosco" class="ftco-section ftco-no-pb contact-section mb-4">
        <div class="container">

            <div class="row d-flex contact-info">

            <div class="col-md-12 d-flex">
                <div class="info2 box2 p-4 text-center">
                <p> Ou deixe aqui sua mensagem</p>
                </div>
            </div>

            </div>
        </div>
  </section>

  @if(session()->has('message'))
    <div class="container alert alert-success">
        {{ session()->get('message') }}
    </div>
  @endif

  <section class="ftco-section contact-section ftco-no-pt">
    <div class="container">
      <div class="row block-9">
        <div id="block"  class="col-md-12 order-md-last d-flex">
          <form  action="/faleconosco/mensagem" method="POST" class="bg-light p-5 contact-form" >
            @csrf
            <div class="form-group">
              <input name="nome_cliente" type="text" class="form-control" placeholder="Seu Nome">
            </div>
            <div class="form-group">
              <input  name="email_cliente"  type="text" class="form-control" placeholder="Seu Email">
            </div>
            <div class="form-group">
              <input  name="assunto_cliente"  type="text" class="form-control" placeholder="Assunto">
            </div>
            <div class="form-group">
              <textarea name="mensagem_cliente" id="" cols="30" rows="7" class="form-control" placeholder="Mensagem"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>

    {{--     <div  class="col-md-6 d-flex">
         <div id="" class="bg-white"></div>
       </div> --}}
     </div>
   </div>
  </section>

 <style>
    #block,#map{
        border-radius: 20px;
        margin-top: 10px;
    }

    #whatsapp{
        cursor: pointer;
    }

    .box2{
        width: 100%;
        display: block;
        background: white;
    }

    .info{
        margin-bottom: -100px;
        font-size: 20px;
        color: #f4bc08;
    }

    .info2{
        font-size: 20px;
        color: #f4bc08;
    }
 </style>


  <script>


    let whatsapp = @json($contato->whatsapp);


   $(document).ready(function() {
           // Rolar a tela para baixo até 500 pixels ao carregar a página
           /* $('html, body').animate({
               scrollTop: 615
           }, 2000); // 1000 é a duração da animação em milissegundos */

           // gerar link whatsapp

            $("#gerarLink").click(function() {
                // Número de telefone para o qual o link será gerado
                let numeroTelefone = "55123456789"; // Substitua pelo número desejado

                // Mensagem opcional para ser enviada junto com o link
                let mensagem = "Olá, gostaria de tirar algumas dúvidas"; // Substitua pela mensagem desejada

                // Montar o link do WhatsApp
                let linkWhatsApp = "https://wa.me/" + whatsapp + "/?text=" + encodeURIComponent(mensagem);

                window.location.href = linkWhatsApp;

            });


            // Google Maps

            let address = ['New York'];


                // Use o URL relativo para a rota Laravel
                let url = '/geocode/' + encodeURIComponent(address);

                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(data) {
                        console.log(data);
                        if (data.results && data.results.length > 0) {
                            let p = data.results[0].geometry.location;
                            let latlng = new google.maps.LatLng(p.lat, p.lng);
                            new google.maps.Marker({
                                position: latlng,
                                map: map,
                                icon: 'images/loc.png'
                            });

                        }
                    },
                    error: function() {
                        console.error('Erro ao recuperar dados de geocodificação.');
                    }
                });






    });


  </script>

  @endsection
