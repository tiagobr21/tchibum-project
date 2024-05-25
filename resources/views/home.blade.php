@extends('layout')
@section('title', 'home')
@section('content')


    <div class="hero-wrap js-fullheight">
        <video autoplay loop muted playsinline
            style="
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
    top: 0;
    left: 0;
  ">
            <source src="{{ secure_asset('/storage/' . $home->video_principal) }}" type="video/mp4">
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
                                    <form class="search-property-1">
                                        <div class="row no-gutters">

                                            <div id="container-pacotes" class="col-md d-flex">

                                                <a href="/pacotes">
                                                    <div id="pacotes">
                                                        <div id="pacote-fixo">
                                                            <img id="pacote-fixo-img" src="{{ secure_asset('/images/pacote-fechado.png')}}">
                                                        </div>
                                                        <p id="pacote-fixo-nome">{{ trans('messages.pacote_fechado') }}</p>
                                                    </div>
                                                </a>
                                            
                                                <div id="pacotes">
                                                    <div id="pacote-comunidade">
                                                        <img id="pacote-comunidade-img" src="{{ secure_asset('/images/pacote-personalizado.png')}}">
                                                    </div>
                                                    <p id="pacote-comunidade-nome">{{ trans('messages.pacote_personalizado') }}</p>
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
    </section>

    <div class="modal" id="meuModal">
        <div class="modal-dialog">
           <div class="modal-content">

              <!-- Cabeçalho do Modal -->
              <div class="modal-header">
                 <h4 class="modal-title">{{ trans('messages.informacao_adicional') }}</h4>
                 <button type="button" id="fechar" class="close" data-dismiss="modal">&times;</button>
              </div>


              <!-- Corpo do Modal -->
              <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                <form id="form">
                   @csrf
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="estrangeiro">
                        <label class="form-check-label" for="flexRadioDefault1" >
                            {{ trans('messages.e_estrangeiro') }}
                        </label>
                      </div>

                    <div class="mb-3" id="cpf-container">
                        <label for="cpf"  class="form-label">CPF</label>
                        <input type="text" id="cpf" name="cpf" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{ trans('messages.endereco') }}</label>
                        <input type="text" id="endereco" name="endereco" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Cep</label>
                        <input type="text" id="cep" name="cep" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{ trans('messages.cidade') }}</label>
                        <input type="text" id="cidade" name="cidade" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{ trans('messages.identificacao') }}</label>
                        <input type="text" id="identificacao" name="identificacao" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{ trans('messages.proficao') }}</label>
                        <input type="text" id="proficao" name="proficao" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{ trans('messages.nacionalidade') }}</label>
                        <input type="text" id="nacionalidade" name="nacionalidade" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{ trans('messages.estado') }}</label>
                        <input type="text" id="estado" name="estado" class="form-control" required>
                    </div>

                  </form>

              </div>

              <!-- Rodapé do Modal -->
              <div class="modal-footer">
                <button id="enviardadoscomple" type="submit" class="btn btn-success" data-dismiss="modal">{{ trans('messages.enviar') }}</button>

              </div>

           </div>
        </div>
     </div>


    <section class="ftco-section services-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100">
                        <h2 class="mb-4">{{ trans('messages.titulo_bem_vindo') }}</h2>
                        <div class="paragrafo"> {!! nl2br(e(trans('messages.descricao_bem_vindo'))) !!}</div>
                        <!-- <p><a href="#" class="btn btn-primary py-3 px-4">Search Destination</a></p> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-1 d-block img"
                                style="background-image: url('{{ secure_asset('/storage/' . $home->imagem_atividade_comunidade1) }}');">
                                {{-- <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-paragliding"></span></div> --}}
                                <div class="media-body">
                                    <h3 class="heading mb-3">{{ trans('messages.home_nome_atividade_comunidade1') }}</h3>
                                    <p class="descricao_atividade_comunidade">
                                        {{ trans('messages.home_descricao_atividade_comunidade1') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-2 d-block img"
                                style="background-image: url('{{ secure_asset('/storage/' . $home->imagem_atividade_comunidade2) }}');">
                              {{--   <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-route"></span></div> --}}
                                <div class="media-body">
                                    <h3 class="heading mb-3">{{ trans('messages.home_nome_atividade_comunidade2') }}</h3>
                                    <p class="descricao_atividade_comunidade">
                                        {{ trans('messages.home_descricao_atividade_comunidade2') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-3 d-block img"
                                style="background-image: url('{{ secure_asset('/storage/' . $home->imagem_atividade_comunidade3) }}');">
                               {{--  <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-tour-guide"></span></div> --}}
                                <div class="media-body">
                                    <h3 class="heading mb-3">{{ trans('messages.home_nome_atividade_comunidade3') }}</h3>
                                    <p class="descricao_atividade_comunidade">
                                        {{ trans('messages.home_descricao_atividade_comunidade3') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-4 d-block img"
                                style="background-image: url('{{ secure_asset('/storage/' . $home->imagem_atividade_comunidade4) }}');">
                                {{-- <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-map"></span></div> --}}
                                <div class="media-body">
                                    <h3 class="heading mb-3">{{ trans('messages.home_nome_atividade_comunidade4') }}</h3>
                                    <p class="descricao_atividade_comunidade">
                                        {{ trans('messages.home_descricao_atividade_comunidade4') }}</p>
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
                    <h2 class="mb-4">{{ trans('messages.pacotes') }}</h2>
                </div>
            </div>

            <div class="row">

               
                @foreach ( $pacotes as $pacote)
                    

                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a class="img" style="background-image: url('{{ secure_asset('/storage/'. $pacote->imagem_principal) }}')">
                            <span class="price">R$ {{$pacote->preco}} </span>
                        </a>
                        <div class="text p-4">
                            <span class="days">{{$pacote->dias}} Dias de Tour</span>
                            <h3><a>{{$pacote->nome}}</a></h3>
                            <p class="location"><span class="fa fa-map-marker"></span> {{$pacote->comunidade->nome}}</p>
                            <ul>
                                <li><i class="fa fa-users"></i> 2</li>
                                <li><span style="color: #999999" class="fa fa-calendar"></span>{{ date('d/m/y', strtotime($pacote->data))}}</li>
                       
                            </ul>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </section>

    <section class="ftco-section" style="{{ secure_asset('/storage/bg_3.jpg') }}">
        <div class="container">
            <div class="row d-flex text-center">
                <div class="col-md-12 heading-section text-center ftco-animate">

                    <h2 class="mb-4">Posts</h2><br>
                </div>

                @foreach ($posts as $post)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <img class="block-20" src="{{ secure_asset('/storage/' . $post->imagem_principal) }}">

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
                                <h3 class="heading"><a href="/post-{{ $datepost }}">{{ $post->titulo }}</a></h3>
                                <p>{{ $post->descricao }}</p>
                                <p><a href="/post-{{ $datepost }}"
                                        class="btn btn-primary">{{ trans('messages.ler_mais') }}</a></p>
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
                <div class="row col-12" style="margin-top: 10px;">
                    <div class="col-md-6 mx-auto">
                        <a class="block-30 d-flex align-items-center justify-content-center"
                            style="background-image: url('{{ secure_asset('/storage/' . $comunidade->imagem_principal) }}'); height: 300px; width:100% ; margin-top:10px; border-radius: 50px;">
                        </a>
                    </div>
                    <div class="col-md-6 mx-auto" >
                        <div class="text" style="border-radius: 50px;">
                            <h3 class="heading"><a>{{ $comunidade->nome }}</a></h3>
                            <p>{{ $comunidade->titulo }}</p>
                            <p><a href="/comunidade-1" class="btn btn-primary">{{ trans('messages.ler_mais') }}</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    {{-- Atividades --}}

    <section class="ftco-section img ftco-select-destination" style="background-image: url('{{ secure_asset('/storage/bg_3.jpg') }}');">
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

                    <div class="carousel-destination owl-carousel">

                        @foreach ($opcoes as $opcoe)
                            <div class="item">
                                <div class="project-destination">
                                    <a href="/atividade-{{ $opcoe->id }}" class="img"
                                        style="background-image: url('{{ secure_asset('/storage/' . $opcoe->imagem) }}');">
                                        <div class="text">
                                            <h3>{{ $opcoe->nome }}</h3>

                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endforeach

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
                        <div class="portfolio-img"><img src="{{ secure_asset('/storage/' . $imagem->imagem) }}"
                                class="img-fluid" alt="{{ $imagem->imagem }}"></div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section>
        <div class="modal fade" id="modalImagem" tabindex="-1" role="dialog" aria-labelledby="modalImagemLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="background-color: transparent; border: none;">
                    <div class="modal-body">
                        <img src="" class="img-fluid" id="imagemModal" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-bottom" style="background-image: url('{{ secure_asset('/storage/bg_feedback.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-4">Feedback</h2>
                </div>
            </div>

            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        @foreach ($depoimentos as $depoimento)
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="text">
                                        <p class="{{ $depoimento->id }}"></p>
                                        <p class="mb-4">{{ $depoimento->depoimento }}</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img"
                                                style="background-image: url('{{ secure_asset('/storage/' . $depoimento->foto) }}')">
                                            </div>
                                            <div class="pl-3 depoimento-info">
                                                <p class="name depoimento-nome">{{ $depoimento->nome }}</p>
                                                <span class="position">{{ $depoimento->ocupação }}</span>
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

    <a href="https://api.whatsapp.com/send/?phone=559292197150&text=Ol%C3%A1%2C+gostaria+de+tirar+algumas+d%C3%BAvidas&type=phone_number&app_absent=0"
         target="_blank" class="btn btn-success whatsapp-btn">
        <img src="https://img.icons8.com/color/48/000000/whatsapp.png" alt="whatsapp">
    </a>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    <style>
        .whatsapp-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 100;
            padding: 10px;
            border-radius: 50%;
            box-shadow: 2px 2px 3px #000;
        }

        .whatsapp-btn img {
            width: 50px;
            height: 50px;
        }
        @media screen and (max-width: 768px) {
            #container-pacotes {
                flex-direction: column;
                text-align: center;
            }

        }

        #container-pacotes {
            background-color: white;
            border-radius: 20px;
            padding: 10px;
            margin-top: 40px;
            border: 1px solid black;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
        }

        #pacotes {
            display: inline-block;
            /* Permite centralizar verticalmente */
            padding: 10px 100px;

        }

        #pacote-fixo {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            cursor: pointer;
        }

        #pacote-comunidade {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            cursor: pointer;

        }

        #pacote-fixo-nome {
            color: #f4bc08;
            cursor: pointer;
            font-weight: 600;

        }

        #pacote-comunidade-nome {
            color: #f4bc08;
            cursor: pointer;
            font-weight: 600;
        }

        #pacote-fixo-img {
            width: 100px;
            border-radius: 20px;
            background-color: white;

        }

        #pacote-comunidade-img {
            width: 100px;
            border-radius: 20px;
            background-color: white;

        }
    </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script>
        let depoimentos = @json($depoimentos);
        let user = @json(auth()->user());


        jQuery(document).ready(function ($) {
            // Aplicar a máscara para o CPF
            $('#cpf').mask('000.000.000-00', { reverse: true });
        });
  

        let avaliacoes = depoimentos.map((element) => {
            return element.avaliação
        });


        for (let index = 0; index < avaliacoes.length; index++) {

            for (let i = 0; i < avaliacoes[index]; i++) {

                $(`.${depoimentos[index].id}`).append(
                    '<span style="margin-right:5px; color:#f4bc08" class="fa fa-star"></span>');

            }

        }

        // verificar se usuário tem as informações complementares

        $("#pacote-comunidade-img").click(function () {
            if(user == null){

                window.location.href = '/login';

            }else{

            
           
                    if(user.endereco == null &&
                    user.cep == null &&
                    user.cidade == null &&
                    user.proficao == null &&
                    user.nacionalidade == null &&
                    user.estado == null ){
                       

                        $("#meuModal").fadeIn();

                    }else{

                        window.location.href = '/pacotes_personalizados';

                    }
            }
        });

        // enviardadoscomple

        $('#enviardadoscomple').click(function () {
            let formData = $('#form').serialize();


            $.ajax({
                type: 'POST',
                url: '/adddadoscomple/'+ user.id,  // Substitua '/sua-rota-no-laravel' pela sua rota Laravel
                data: formData,
                success: function (response) {

                    window.location.href = '/pacotes_personalizados';

                },
                error: function (error) {
                    // Lógica para tratar erros (se necessário)
                    console.log(error);
                }

            });
        });

    $("#fechar").click(function () {

      $("#meuModal").fadeOut();

   });


        
    </script>
    <script>
        $(document).ready(function() {

            $('#cpf').show();
            $('#identificacao').hide();

            $('#estrangeiro').change(function () {
            // Se o checkbox estiver marcado (pessoa estrangeira), oculte os campos "UF" e "identificacao"
            if ($(this).prop('checked')) {
                $('#cpf').hide();
                $('#identificacao').show();
            } else {
                // Se o checkbox estiver desmarcado (pessoa não estrangeira), exiba os campos "UF" e "identificacao"
                $('#cpf').show();
                $('#identificacao').hide();
            }
        });

            // window.location.reload();

            $('.portfolio-img').click(function() {
                var src = $(this).children('img').attr('src');
                $('#imagemModal').attr('src', src);
                $('#modalImagem').modal('show');
            });
        });
    </script>
@endsection
