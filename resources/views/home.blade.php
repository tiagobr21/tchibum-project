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

        <h1 class="mb-4">{{ $home->titulo_principal }}</h1>

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
            <div class="col-md-12 nav-link-wrap">
              <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                aria-orientation="vertical">
                <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill"
                  href="#v-pills-1" role="tab" aria-controls="v-pills-1"
                  aria-selected="true">Buscar Tour</a>

                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                  role="tab" aria-controls="v-pills-2" aria-selected="false">Hotel</a>

              </div>
            </div>
            <div class="col-md-12 tab-wrap">

              <div class="tab-content" id="v-pills-tabContent">

                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                  aria-labelledby="v-pills-nextgen-tab">
                  <form action="#" class="search-property-1">
                    <div class="row no-gutters">
                      <div class="col-md d-flex">
                        <div class="form-group p-4 border-0">
                          <label for="#">Destino</label>
                          <div class="form-field">
                            <div class="icon"><span class="fa fa-search"></span></div>
                            <input type="text" class="form-control"
                              placeholder="Search place">
                          </div>
                        </div>
                      </div>
                      <div class="col-md d-flex">
                        <div class="form-group p-4">
                          <label for="#">Check-in data</label>
                          <div class="form-field">
                            <div class="icon"><span class="fa fa-calendar"></span></div>
                            <input type="text" class="form-control checkin_date"
                              placeholder="Check In Date">
                          </div>
                        </div>
                      </div>
                      <div class="col-md d-flex">
                        <div class="form-group p-4">
                          <label for="#">Check-out data</label>
                          <div class="form-field">
                            <div class="icon"><span class="fa fa-calendar"></span></div>
                            <input type="text" class="form-control checkout_date"
                              placeholder="Check Out Date">
                          </div>
                        </div>
                      </div>
                      <div class="col-md d-flex">
                        <div class="form-group p-4">
                          <label for="#">Preço Máximo</label>
                          <div class="form-field">
                            <div class="select-wrap">
                              <div class="icon"><span
                                  class="fa fa-chevron-down"></span></div>
                              <select name="" id="" class="form-control">
                                <option value="">R$ 180,00</option>
                                <option value="">R$ 1000,00</option>
                                <option value="">R$ 5000,00</option>
                                <option value="">R$ 1000,00</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md d-flex">
                        <div class="form-group d-flex w-100 border-0">
                          <div class="form-field w-100 align-items-center d-flex">
                            <input type="submit" value="Search"
                              class="align-self-stretch form-control btn btn-primary">
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                  aria-labelledby="v-pills-performance-tab">
                  <form action="#" class="search-property-1">
                    <div class="row no-gutters">
                      <div class="col-lg d-flex">
                        <div class="form-group p-4 border-0">
                          <label for="#">Destino</label>
                          <div class="form-field">
                            <div class="icon"><span class="fa fa-search"></span></div>
                            <input type="text" class="form-control"
                              placeholder="Search place">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg d-flex">
                        <div class="form-group p-4">
                          <label for="#">Check-in data</label>
                          <div class="form-field">
                            <div class="icon"><span class="fa fa-calendar"></span></div>
                            <input type="text" class="form-control checkin_date"
                              placeholder="Check In Date">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg d-flex">
                        <div class="form-group p-4">
                          <label for="#">Check-out data</label>
                          <div class="form-field">
                            <div class="icon"><span class="fa fa-calendar"></span></div>
                            <input type="text" class="form-control checkout_date"
                              placeholder="Check Out Date">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg d-flex">
                        <div class="form-group p-4">
                          <label for="#">Prço Limite</label>
                          <div class="form-field">
                            <div class="select-wrap">
                              <div class="icon"><span
                                  class="fa fa-chevron-down"></span></div>
                              <select name="" id="" class="form-control">
                                <option value="">R$ 180,00</option>
                                <option value="">R$ 250,00</option>
                                <option value="">R$ 500,00</option>
                                <option value="">R$ 1000,00</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg d-flex">
                        <div class="form-group d-flex w-100 border-0">
                          <div class="form-field w-100 align-items-center d-flex">
                            <input type="submit" value="Search"
                              class="align-self-stretch form-control btn btn-primary p-0">
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
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
          <div  class="paragrafo"> {!! nl2br(e($home->descricao_bem_vindo)) !!}</div>
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
                <p class="descricao_atividade_comunidade">{{  $home->descricao_atividade_comunidade1}}</p>
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
                <p class="descricao_atividade_comunidade">{{  $home->descricao_atividade_comunidade2 }}</p>
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
                <p class="descricao_atividade_comunidade">{{ $home->descricao_atividade_comunidade3 }}</p>
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
                <p class="descricao_atividade_comunidade">{{ $home->descricao_atividade_comunidade4 }}</p>
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
        <h2 class="mb-4">Pacotes</h2>
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

          <h2 class="mb-4">Posts</h2>
        </div>
              <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">

                      <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');"></a>
                      <div class="text">
                          <div class="d-flex align-items-center mb-4 topp">
                            <div class="one">
                            <span class="day">11</span>
                          </div>
                          <div class="two">
                            <span class="yr">2020</span>
                            <span class="mos">September</span>
                          </div>
                      </div>
                    <h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <p><a href="#" class="btn btn-primary">Ler mais</a></p>
                  </div>
                  </div>
               </div>

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

        <h2 class="mb-4">COMUNIDADES QUE ATUAMOS</h2>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-12 d-flex ftco-animate" style="margin-bottom: 50px">
        <a href="blog-single.html" class="block-30"
        style="background-image: url('images/image_1.jpg'); border-radius:50px">
      </a>
        <div class="blog-entry2 justify-content-end">

          <div class="text" style="border-radius:10px;">

            <h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary">Ler mais</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-12 d-flex ftco-animate">
        <a href="blog-single.html" class="block-30"
        style="background-image: url('images/image_1.jpg'); border-radius:50px">
      </a>
        <div class="blog-entry2 justify-content-end">

          <div class="text" style="border-radius:10px;">

            <h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary">Ler mais</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


{{-- Atividades --}}

<section class="ftco-section img ftco-select-destination" style="background-image: url(images/bg_3.jpg);">
  <div class="container">
    <div class="row justify-content-center pb-4">
      <div class="col-md-6 heading-section text-center ftco-animate">
        <span class="subheading">O que oferecemos de melhor</span>
        <h2 class="mb-4">Nossas Atividades</h2>
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

{{-- Galeria --}}

<section class="ftco-section img ftco-select-destination" style="background-image: url(images/bg_3.jpg);">
  <div class="container">
    <div class="row justify-content-center pb-4">
      <div class="col-md-6 heading-section text-center ftco-animate">
        <span class="subheading">Momentos</span>
        <h2 class="mb-4">Galeria</h2>
      </div>
    </div>
  </div>
  <div class="container ">
    <div class="row">
      <div class="col-md-12">
        <div class="carousel-destination owl-carousel ftco-animate">
          <div class="item">
            <div class="galeria">
              <a class="galeria-img" style="background-image: url(images/teatro-amazonas.jpg);">
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>




<section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/amazonia-dicas-blog-1920x520.png);">
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
                    <p class="{{ $depoimento->id }}">

                    </p>
                    <p class="mb-4">{{  $depoimento->depoimento }}</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url('{{ asset('/storage/' . $depoimento->foto) }}')"></div>
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
          </div>
        </div>

</section>






<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
      stroke="#F96D00" />
  </svg></div>


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



@endsection
