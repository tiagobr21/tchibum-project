@extends('layout')
@section('title','pacote personalizado')
@section('content')


<section id="posts" class="ftco-section" style="background-image:url('images/18.jpg');">
    <div class="container">
        <div class="row d-flex">



            <!-- partial:index.partial.html -->
            <div id="container" class="container mt-5">
                <div class="progress px-1" style="height: 3px;">
                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="step-container d-flex justify-content-between">
                <div class="step-circle" onclick="displayStep(1)">1</div>
                <div class="step-circle" onclick="displayStep(2)">2</div>
                <div class="step-circle" onclick="displayStep(3)">3</div>
                </div>

                <form id="multi-step-form">
                    <div class="step step-1">
                        <!-- Step 1 form fields here -->
                        <h3 >Localidade e Datas!</h3>
                        <div class="mb-3">
                            <label  for="comunidade" class="form-label">Selecione a comunidade:</label>

                            <select class="form-select" id="comunidade" name="field1">

                                <option selected>Escolha uma opção</option>

                                @foreach ($comunidades as $comunidade)

                                <option name="comunidade">{{  $comunidade->nome }}</option>

                                @endforeach
                            </select>

                        </div>
                        <!-- data e dias-->
                        <div class="mb-3">
                            <label   for="data" class="form-label">Data:</label>
                            <input type="date" class="form-control" id="data" name="data">
                        </div>


                        <div class="mb-3">
                            <label for="dias" class="form-label">Dias:</label>
                            <input type="number" class="form-control" id="dias" name="dias">
                        </div>

                        <button type="button" class="btn btn-primary next-step">Continuar</button>

                    </div>

                    <div class="step step-2">
                        <!-- Step 2 form fields here -->
                        <h3>Pessoas e Atividades</h3>
                        <div class="mb-3">
                        <label for="pessoas" class="form-label">Quantidade de pessoas:</label>
                        <input type="number" id="pessoas" class="form-control" name="pessoas">
                        </div>
                        <label for="field2" class="form-label">Selecione as Atividades:</label>
                        <div class="mb-3 select-container">
                            <div class="col-lg-4 d-flex justify-content-center align-items-center">
                                <select class="js-select2 select-dd" id="opcoes" name="atividades[]" multiple="multiple">
                                    @foreach ( $opcoes as $opcoe )

                                    <option value="{{ $opcoe->preco }}" data-badge="">{{ $opcoe->nome }} R$ {{$opcoe->preco }}</option>

                                    @endforeach
                                </select>
                        </div>
                        </div>
                        <button type="button" class="btn btn-primary prev-step">Previous</button>
                        <button type="button" id="continuar-resultado" class="btn btn-primary next-step">Continuar</button>
                    </div>

                    <div class="step step-3">
                        <!-- Step 3 form fields here -->
                        <h3>Seu Pacote</h3>

                         <div id="respostas">

                         </div>
                         <br>

                        <button type="button" class="btn btn-primary prev-step">Previous</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

  <script>
    let currentStep = 1;
    let updateProgressBar;

    $(document).ready(function() {

        let dados = {};
        let resultado = '';
        let soma = 0;

        $('#comunidade').on('change', function() {
            dados.comunidade = $(this).val();
            console.log(dados.comunidade);
      });

        $('#data').on('input', function() {
            dados.data = $(this).val();

        });


        $('#dias').on('input', function() {
            dados.dias = $(this).val();

        });

        $('#pessoas').on('input', function() {
            dados.pessoas = $(this).val();

        });

        $('#opcoes').select2();

        $('#opcoes').on('change', function() {
            dados.opcoes = $('#opcoes').select2('data');

            let comunidade = '<i class="fa fa-home" aria-hidden="true"> <strong> Comunidade: </strong>' + dados.comunidade + '<br><br>';

            var dataOriginal = dados.data;  // Substitua isso pela sua data

            // Converte para um objeto Date
            var dataObjeto = new Date(dataOriginal);

            // Obtém os componentes da data
            var dia = dataObjeto.getDate().toString().padStart(2, '0');
            var mes = (dataObjeto.getMonth() + 1).toString().padStart(2, '0');
            var ano = dataObjeto.getFullYear();

            // Cria a string da data no formato desejado
            var dataFormatada = dia + '/' + mes + '/' + ano;

            let data = '<i class="fa fa-calendar" aria-hidden="true"> <strong> Data: </strong> ' + dataFormatada + '<br><br>';

            let dias = '<i class="fa fa-bed" aria-hidden="true"> <strong> Quantidade de Dias: </strong> ' + dados.dias + '<br><br>';

            let pessoas = '<i class="fa fa-users" aria-hidden="true"> <strong> Quantidade de Pessoas: </strong>' + dados.pessoas + '<br><br>';

            dados.opcoes.forEach(function(opcao) {
                soma = soma + opcao.id;

                console.log(soma);
            });



            resultado = comunidade + data + dias + pessoas +'<strong> Opções selecionadas: </strong> <br>';

            dados.opcoes.forEach(function(opcao) {

                resultado += opcao.text + '<br>';
            });



            exibirResultado()
        });


      function exibirResultado() {


        $('#respostas').html(resultado);
      }

    });
/*     $('#enviardadoscomple').click(function () {
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
        }); */


  function displayStep(stepNumber) {
    if (stepNumber >= 1 && stepNumber <= 3) {
      $(".step-" + currentStep).hide();
      $(".step-" + stepNumber).show();
      currentStep = stepNumber;
      updateProgressBar();
    }
  }

  $(document).ready(function() {
    $('#multi-step-form').find('.step').slice(1).hide();

    $(".next-step").click(function() {
      if (currentStep < 3) {
        $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
        currentStep++;
        setTimeout(function() {
          $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
          $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
          updateProgressBar();
        }, 500);
      }
    });

    $(".prev-step").click(function() {
      if (currentStep > 1) {
        $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
        currentStep--;
        setTimeout(function() {
          $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
          $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInLeft");
          updateProgressBar();
        }, 500);
      }
    });

    updateProgressBar = function() {
      let progressPercentage = ((currentStep - 1) / 2) * 100;
      $(".progress-bar").css("width", progressPercentage + "%");
    }
  });
  </script>

  <style>


        #respostas{
            padding: 20px;
            border: 1px solid black;
            border-radius: 20px;
            font-size: 20px;
            background-color: #fff;
        }
        h3{
            color: #fff
        }

        label{
            color: #fff
        }
        #container {
        max-width: 628px;
        }

        .step-container {
        position: relative;
        text-align: center;
        transform: translateY(-43%);
        }

        .step-circle {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #fff;
        border: 2px solid #f4bc08;
        line-height: 30px;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        cursor: pointer; /* Added cursor pointer */
        }

        .step-line {
        position: absolute;
        top: 16px;
        left: 50px;
        width: calc(100% - 100px);
        height: 2px;
        background-color: #fd5f00 !important;
        z-index: -1;
        }

        #multi-step-form {
        overflow-x: hidden;
        }

        .select-container {
        display: flex;
        justify-content: center;
        align-items: center;
        }
        .col-lg-4 {
        width: 100% !important;
        }
        .select-dd {
        width: 100% !important;
        }

  </style>
@endsection