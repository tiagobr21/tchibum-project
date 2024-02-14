@extends('layout')
@section('title','pacote')
@section('content')


<section id="posts" class="ftco-section" style="background-image:url('images/32.jpg');">
    <div class="container">
        <div class="row d-flex">
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

                    <a href="/solicitacaocompra/{{ $pacote->id }}" class="btn btn-success">Comprar</a>
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



            <section>
                <div class="modal fade" id="modalImagemSecund" tabindex="-1" role="dialog" aria-labelledby="modalImagemLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content" style="background-color: transparent; border: none;">
                            <div class="modal-body">
                                <img src="" class="thumbnail" id="imagemModalSecund" alt="Responsive image">
                            </div>
                        </div>
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
        </div>
    </div>


    </div>



  </section>

  <style>


    .container {
        margin-top: 50px;
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

<script>
    $(document).ready(function() {

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
</script>

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
