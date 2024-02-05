@extends('layout')
@section('title','home')
@section('content')


<div class="hero-wrap js-fullheight">
  <video autoplay loop muted playsinline style="
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
    top: 0;
    left: 0;
  ">
    <source src="{{asset('/storage/'. $home->video_principal)}}" type="video/mp4">
    Seu navegador não suporta o elemento de vídeo.
  </video>
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate">

        <h1 class="mb-4">{{ trans('messages.titulo_principal') }}</h1>

      </div>

    </div>
  </div>
</div>



 <section class="ftco-section ftco-no-pb ftco-no-pt">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ftco-search d-flex justify-content-center">
          <div class="row">

            <div class="col-md-12 tab-wrap">

                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                  aria-labelledby="v-pills-nextgen-tab">
                  <form action="#" class="search-property-1">
                    <div class="row no-gutters">

                      <div id="container-pacotes" class="col-md d-flex">


                            <div id="pacotes">
                                <div id="pacote-fixo">
                                    <img id="pacote-fixo-img" src="/images/pacote-fixo2.png">
                                </div>
                                <p id="pacote-fixo-nome">Pacotes Fechados</p>
                           </div>

                           <div id="pacotes">
                            <div id="pacote-comunidade">
                                <img id="pacote-comunidade-img" src="/images/pacote-comunidade.png">
                            </div>
                                <p id="pacote-comunidade-nome">Pacotes Personalizados</p>
                           </div>


                  </form>
                </div>

            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="ftco-section services-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
        <div class="w-100">
          <h2 class="mb-4">{{ $home->titulo_bem_vindo }}</h2>
          <div  class="paragrafo"> {!! nl2br(e(trans('messages.descricao_bem_vindo') )) !!}</div>
          <!-- <p><a href="#" class="btn btn-primary py-3 px-4">Search Destination</a></p> -->
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 color-1 d-block img"
              style="background-image: url('{{ asset('/storage/' . $home->imagem_atividade_comunidade1) }}');">
              <div class="icon d-flex align-items-center justify-content-center"><span
                  class="flaticon-paragliding"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">{{ $home->nome_atividade_comunidade1 }}</h3>
                <p class="descricao_atividade_comunidade">{{  trans('messages.home_descricao_atividade_comunidade1') }}</p>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 color-2 d-block img"
              style="background-image: url('{{ asset('/storage/' . $home->imagem_atividade_comunidade2) }}');">
              <div class="icon d-flex align-items-center justify-content-center"><span
                  class="flaticon-route"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">{{ $home->nome_atividade_comunidade2 }}</h3>
                <p class="descricao_atividade_comunidade">{{  trans('messages.home_descricao_atividade_comunidade2') }}</p>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 color-3 d-block img"
              style="background-image: url('{{ asset('/storage/' . $home->imagem_atividade_comunidade3) }}');">
              <div class="icon d-flex align-items-center justify-content-center"><span
                  class="flaticon-tour-guide"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">{{ $home->nome_atividade_comunidade3 }}</h3>
                <p class="descricao_atividade_comunidade">{{ trans('messages.home_descricao_atividade_comunidade3') }}</p>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 color-4 d-block img"
              style="background-image: url('{{ asset('/storage/' . $home->imagem_atividade_comunidade4) }}');">
              <div class="icon d-flex align-items-center justify-content-center"><span
                  class="flaticon-map"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">{{ $home->nome_atividade_comunidade4 }}</h3>
                <p class="descricao_atividade_comunidade">{{ trans('messages.home_descricao_atividade_comunidade4') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- pacotes --}}
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center pb-4">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <h2 class="mb-4">{{ trans('messages.pacotes')  }}</h2>
      </div>
    </div>

    <div class="row">




      <div class="col-md-4 ftco-animate">
        <div class="project-wrap">
          <a href="#" class="img" style="background-image: url(images/vitoria-regia.png);">
            <span class="price">550/Pessoa</span>
          </a>
          <div class="text p-4">
            <span class="days">1 Dia tour</span>
            <h3><a href="#">Nome Pacote 1</a></h3>
            <p class="location"><span class="fa fa-map-marker"></span> Manaus</p>
            <ul>
              <li><span class="flaticon-shower"></span>2</li>
              <li><span class="flaticon-king-size"></span>3</li>
              <li><span class="flaticon-mountains"></span>Near Mountain</li>
            </ul>
          </div>
        </div>
      </div>



    </div>
  </div>
</section>

<section class="ftco-section" style="background-image: url(images/bg_3.jpg);">
  <div class="container">
      <div class="row d-flex text-center">
        <div class="col-md-12 heading-section text-center ftco-animate">

          <h2 class="mb-4">Posts</h2><br>
        </div>

        @foreach ($posts as $post)
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
                <img class="block-20" src="{{asset('/storage/'. $post->imagem_principal)}}">

                @php
                    $created_at = $post->created_at;

                    $datepost = $created_at->format('Y-m-d H:i:s');

                    $dia = $created_at->format('d');
                    setlocale(LC_TIME, 'pt_BR.utf8', 'pt_BR', 'portuguese');
                    $mes = ucfirst(strftime('%B', strtotime($created_at->format('Y-m-d'))));
                    $ano = $created_at->format('Y');
               @endphp

                <div class="text">
                  <div class="d-flex align-items-center mb-4 topp">
                      <div class="one">
                        <span class="day" style="font-size:30px;">{{ $dia }}</span>
                      </div>
                      <div class="two">
                        <span class="yr">{{ $mes }}</span>
                        <span class="mos">{{ $ano }}</span>
                      </div>
                  </div>
                    <h3 class="heading"><a href="/post-{{$datepost}}">{{ $post->titulo }}</a></h3>
                    <p>{{ $post->descricao }}</p>
                    <p><a href="/post-{{$datepost}}" class="btn btn-primary">{{ trans('messages.ler_mais') }}</a></p>
                </div>

            </div>
        </div>

        @endforeach
      {{-- navegação --}}
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">

          </div>
        </div>
      </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center pb-4">
      <div class="col-md-12 heading-section text-center ftco-animate">

        <h2 class="mb-4">{{ trans('messages.comunidades_que_atuamos') }}</h2>
      </div>
    </div>

    @foreach ($comunidades as $comunidade)

    <div class="row d-flex">
      <div class="col-md-12 d-flex ftco-animate" style="margin-bottom: 50px">
        <a href="blog-single.html" class="block-30"
        style="background-image: url('{{ asset('/storage/' . $comunidade->imagem_principal) }}'); border-radius:50px">
      </a>
        <div class="blog-entry2 justify-content-end">

          <div class="text" style="border-radius:50px;">

            <h3 class="heading"><a href="#">{{ $comunidade->nome }}</a></h3>
            {{ $comunidade->titulo }}</p>
            <p><a href="#" class="btn btn-primary">{{ trans('messages.ler_mais') }}</a></p>
          </div>
        </div>
      </div>

    </div>

    @endforeach
  </div>
</section>


{{-- Atividades --}}

<section class="ftco-section img ftco-select-destination" style="background-image: url(images/bg_3.jpg);">
  <div class="container">
    <div class="row justify-content-center pb-4">
      <div class="col-md-6 heading-section text-center ftco-animate">
        <span class="subheading">{{ trans('messages.o_que_oferecemo_de_melhor') }}</span>
        <h2 class="mb-4">{{ trans('messages.nossas_atividades') }}</h2>
      </div>
    </div>
  </div>
  <div class="container ">
    <div class="row">
      <div class="col-md-12">
        <div class="carousel-destination owl-carousel ftco-animate">
          <div class="item">
            <div class="project-destination">
              <a href="#" class="img" style="background-image: url(images/teatro-amazonas.jpg);">
                <div class="text">
                  <h3>Manaus</h3>

                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="project-destination">
              <a href="#" class="img" style="background-image: url(images/encontro-aguas.jpg);">
                <div class="text">
                  <h3>Encontro das àguas</h3>

                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="project-destination">
              <a href="#" class="img" style="background-image: url(images/turista.jpg);">
                <div class="text">
                  <h3>Passeio</h3>

                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="project-destination">
              <a href="#" class="img" style="background-image: url(images/boto.jpg);">
                <div class="text">
                  <h3>Botos</h3>

                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="project-destination">
              <a href="#" class="img" style="background-image: url(images/vitoria-regia.png);">
                <div class="text">
                  <h3>Regional</h3>

                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row justify-content-center pb-4">
    <div class="col-md-6 heading-section text-center ftco-animate">
      <span class="subheading">{{ trans('messages.momentos') }}</span>
      <h2 class="mb-4">{{ trans('messages.galeria') }}</h2>
    </div>
  </div>
</div>
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">
    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

      @foreach ($imagens as $imagem)
      <div class="col-lg-4 col-md-6 galeria-item">
        <div class="portfolio-img"><img src="{{ asset('/storage/' . $imagem->imagem) }}" class="img-fluid" alt="{{ $imagem->imagem}}"></div>
      </div>
      @endforeach

    </div>
  </div>
</section>

<section>
  <div class="modal fade" id="modalImagem" tabindex="-1" role="dialog" aria-labelledby="modalImagemLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content" style="background-color: transparent; border: none;">
        <div class="modal-body">
          <img src="" class="img-fluid" id="imagemModal" alt="Responsive image">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_feedback.jpg);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center pb-4">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
        <h2 class="mb-4">Feedback</h2>
      </div>
    </div>

        <div  class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              @foreach ($depoimentos as $depoimento)
              <div  class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="{{ $depoimento->id }}"></p>
                    <p class="mb-4">{{  $depoimento->depoimento }}</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url('{{ asset('/storage/' . $depoimento->foto) }}')"></div>
                      <div class="pl-3 depoimento-info">
                        <p class="name depoimento-nome">{{  $depoimento->nome }}</p>
                        <span class="position">{{  $depoimento->ocupação }}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
      </div>
  </div>
</section>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
      stroke="#F96D00" />
  </svg></div>

  <style>


    #container-pacotes{
        background-color:white;
        opacity: 0.95;
        border-radius: 20px;
        padding: 10px;
        margin-top: 40px;
        border: 1px solid black
    }
    #pacotes{
        display: inline-block; /* Permite centralizar verticalmente */
        padding: 10px 100px;

    }

    #pacote-fixo{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        cursor: pointer;
    }

    #pacote-comunidade{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        cursor: pointer;

    }
    #pacote-fixo-nome{
        color: #f4bc08;
        cursor: pointer;
        font-weight: 600;

    }

    #pacote-comunidade-nome{
        color: #f4bc08;
        cursor: pointer;
        font-weight: 600;
    }

   #pacote-fixo-img{
        width: 100px;
        border-radius: 20px;
        background-color: white;

    }

    #pacote-comunidade-img{
        width: 100px;
        border-radius: 20px;
        background-color: white;

    }


  </style>

  <script >

      let depoimentos = @json($depoimentos);


      let avaliacoes = depoimentos.map((element)=>{
          return element.avaliação
      });


      for (let index = 0; index < avaliacoes.length; index++) {

        for (let i= 0; i < avaliacoes[index]; i++) {

          $(`.${depoimentos[index].id}`).append('<span style="margin-right:5px; color:#f4bc08" class="fa fa-star"></span>');

        }

      }

  </script>
  <script>
    $(document).ready(function(){

        // window.location.reload();

      $('.portfolio-img').click(function(){
        var src = $(this).children('img').attr('src');
        $('#imagemModal').attr('src', src);
        $('#modalImagem').modal('show');
      });
    });
  </script>
@endsection
