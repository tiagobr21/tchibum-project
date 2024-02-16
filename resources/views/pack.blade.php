@extends('layout')
@section('title','pacote')
@section('content')


<section id="posts" class="ftco-section" style="background-image:url('images/32.jpg');">
    <div class="container">
        <div class="row d-flex">

            <div id="alerta" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                <strong>Mensagem:</strong> <span id="mensagemAlerta"></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="product-container">

                <div class="image-thumbnails">
                    <img class="thumbnail" src="{{asset('/storage/'. $pacote->imagem_principal)}}" alt="Thumbnail 1">

                    @foreach ($pacote->imagens_secundarias as $imagem )
                        <img class="thumbnail" src="{{asset('/storage/'. $imagem )}}" alt="Thumbnail 1">
                    @endforeach
                </div>


               <div class="product-image">
                <img class="img-fluid" src="{{asset('/storage/'. $pacote->imagem_principal)}}" alt="Product Image">
              </div>


                <div class="product-details">
                    <h2>{{ $pacote->nome }}</h2>
                    <h5>{{ $pacote->titulo }}</h5>
                    <p class="product-description">
                        {{ $pacote->descricao }}
                    </p>
                    <p class="product-price">R$ {{ $pacote->preco }}</p>

                    <a  id="comprar" class="btn btn-success">Comprar</a>

                    {{-- href="/solicitacaocompra/{{ $pacote->id }}" --}}
                </div>
            </div>

            <div class="infos">
                <div class="product-details">

                <div class="col-md-12 d-flex">
                    <h5><i class="fa fa-calendar" aria-hidden="true"></i> Data: {{ date('d/m/Y',strtotime($pacote->data)) }}</h5>
                    <h5><i class="fa fa-users" aria-hidden="true"></i>  Quantidade de pessoas: {{ $pacote->pessoas}} </h5>
                    <h5><i class="fa fa-bed" aria-hidden="true"></i>  Quantidade de dias:  {{ $pacote->dias}} </h5>
                    <h5><i class="fa fa-home" aria-hidden="true"></i>  Comunidade:  {{ $pacote->comunidade->nome}} </h5>
                </div>
                <br>
                <h5 class="col-md-12 d-flex">Atividades</h5>
                <div class="col-md-12 d-flex">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Preço</th>
                          </tr>
                        </thead>
                        @foreach ($pacote->opcoes as $opcao)
                            <tbody>
                            <tr>
                                <td>{{ $opcao->nome }}</td>
                                <td>R$ {{ $opcao->preco }}</td>
                            </tr>
                            </tbody>
                        @endforeach
                      </table>
                </div>

                    <br>

                    <h2>Informações </h2>

                    <p class="product-description">

                        {{ $pacote->infos }}
                    </p>

                </div>
            </div>




            <div class="modal" id="meuModal">
                <div class="modal-dialog">
                   <div class="modal-content">



                      <!-- Cabeçalho do Modal -->
                      <div class="modal-header">
                         <h4 class="modal-title">Informações Adicionais</h4>
                         <button type="button" id="fechar" class="close" data-dismiss="modal">&times;</button>
                      </div>


                      <!-- Corpo do Modal -->
                      <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                        <form id="form">
                           @csrf
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="estrangeiro">
                                <label class="form-check-label" for="flexRadioDefault1" >
                                   Você é estrangeiro?
                                </label>
                              </div>

                            <div class="mb-3" id="cpf-container">
                                <label for="cpf"  class="form-label">CPF</label>
                                <input type="text" id="cpf" name="cpf" class="form-control" placeholder="Digite seu CPF">
                            </div>

                              <div class="mb-3" id="uf-container">
                                <label for="uf" class="form-label">UF</label>
                                <input type="text" id="uf" name="uf" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Endereço</label>
                                <input type="text" id="endereco" name="endereco" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Cep</label>
                                <input type="text" id="cep" name="cep" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Cidade</label>
                                <input type="text" id="cidade" name="cidade" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Identificação ( Se for Estrangeiro)</label>
                                <input type="text" id="identificacao" name="identificacao" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Profissão</label>
                                <input type="text" id="proficao" name="proficao" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nacionalidade</label>
                                <input type="text" id="nacionalidade" name="nacionalidade" class="form-control" >
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Estado</label>
                                <input type="text" id="estado" name="estado" class="form-control" >
                            </div>

                          </form>

                      </div>

                      <!-- Rodapé do Modal -->
                      <div class="modal-footer">
                        <button id="enviardadoscomple" type="submit" class="btn btn-success" data-dismiss="modal">Enviar</button>

                      </div>

                   </div>
                </div>
             </div>



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

        </div>
    </div>


    </div>



  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

  <script>


     let user = @json(auth()->user());
     let pacote = @json($pacote);


    jQuery(document).ready(function ($) {
      // Aplicar a máscara para o CPF
      $('#cpf').mask('000.000.000-00', { reverse: true });
     });


    $(document).ready(function() {

        // if estrangeiro


        $('#estrangeiro').change(function () {
            // Se o checkbox estiver marcado (pessoa estrangeira), oculte os campos "UF" e "CPF"
            if ($(this).prop('checked')) {
                $('#uf, #cpf').hide();
            } else {
                // Se o checkbox estiver desmarcado (pessoa não estrangeira), exiba os campos "UF" e "CPF"
                $('#uf, #cpf').show();
            }
        });

        //imgs

        $('.product-image').click(function() {
            let src = $(this).children('img').attr('src');
            $('#imagemModal').attr('src', src);
            $('#modalImagem').modal('show');
        });

        $('.thumbnail').click(function() {
            let newImageSrc = $(this).attr('src');
            $('.product-image img').attr('src', newImageSrc);
        });
    });


    $("#comprar").click(function () {
            if(user.cpf == null || '' &&
            user.uf == null || '' &&
            user.endereco == null || '' &&
            user.cep == null || ''&&
            user.cidade == null || '' &&
            user.identificacao == null || '' &&
            user.proficao == null || '' &&
            user.nacionalidade == null || '' &&
            user.estado == null || '' ){

                $("#meuModal").fadeIn();

            }else{
                $.ajax({
                    type: 'POST',
                    url: '/solicitacaocompra/'+ pacote.id,
                    data: { _token: '{{ csrf_token() }}' },
                    success: function (response) {

                        console.log(response);

                    },
                    error: function (error) {
                        // Lógica para tratar erros (se necessário)
                        console.log(error);
                    }
                });
            }
    });

     // form

     $('#enviardadoscomple').click(function () {
            let formData = $('#form').serialize();

            $.ajax({
                type: 'POST',
                url: '/adddadoscomple/'+ user.id,  // Substitua '/sua-rota-no-laravel' pela sua rota Laravel
                data: formData,
                success: function (response) {

                    console.log(response);
                    $('#mensagemAlerta').text(response);
                    $('#alerta').fadeIn();

                    // Feche o modal após o envio
                    $("#meuModal").fadeOut();
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


  <style>

    #comprar{
        color: #fff
    }

    .container {
        margin-top: 30px;
    }

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .product-container {
        max-width: 80%;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        display: flex;
    }

    .infos {
        max-width: 80%;
        margin: -20px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        display: flex;
    }

    .product-image {
        max-width: 50%;  /* Ajuste o tamanho da imagem principal aqui */
        height: auto;
        border-radius: 5px;
        margin-left: 20px;
        margin-right: 20px;
    }

    .image-thumbnails {
        display: flex;
        flex-direction: column;
    }

    .thumbnail {
        max-width: 80px;
        height: auto;
        margin-bottom: 10px;
        cursor: pointer;
    }

    .product-details {
        flex-grow: 1;
    }

    .product-description {
        line-height: 1.6;
    }

    .product-price {
        font-size: 24px;
        color: #333;
    }

    /* Media queries for responsive design */
    @media (max-width: 768px) {
        .product-container {
            flex-direction: column;
        }

        .image-thumbnails{
            margin: 0 auto; width: 50%;
        }

        .product-image {
            max-width: 100%;
            margin: 0;
        }

        .infos {
            margin-top: 20px;
        }
    }

</style>



@endsection






{{-- sessões arquivadas --}}



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
  </section>
 --}}

{{--  <h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<p><a href="#" class="btn btn-primary">Read more</a></p> --}}
