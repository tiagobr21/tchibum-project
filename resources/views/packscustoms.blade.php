@extends('layout')
@section('title','pacote personalizado')
@section('content')


<section id="posts" class="ftco-section" style="background-image:url('{{ asset('/storage/18.webp') }}');">
    <div class="container">
        <div class="row d-flex">

            <div id="loading">
                <div  class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
            </div>


            <div  class="container mt-4">
                <!-- Alerta Bootstrap -->
                <div id="message-data-ocupado" class="alert alert-danger alert-dismissible fade show" role="alert">
                    Já existe agendamento para essa data
                    <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            
            <div  class="container mt-4">
                <!-- Alerta Bootstrap -->
                <div id="message-data-disponivel" class="alert alert-success alert-dismissible fade show" role="alert">
                    A data está disponível
                <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
        
            <div  class="container mt-4">
                <!-- Alerta Bootstrap -->
                <div id="message-dias-ocupado" class="alert alert-danger alert-dismissible fade show" role="alert">
                    Os dias colidem com com outro agendamento
                <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div  class="container mt-4">
                <!-- Alerta Bootstrap -->
                <div id="message-dias-disponivel" class="alert alert-success alert-dismissible fade show" role="alert">
                    Os dias estão em coformidade 
                <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


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
                            <div id="comunidade-page" class="form-text">Quer conhecer mais as comuniades? <a href="/comunidades">clique aqui</a></div>

                        </div>
                        <!-- data e dias-->
                        <div class="mb-3">
                            <label   for="data" class="form-label">Data:</label>
                            <input type="date" class="form-control" id="data" name="data" disabled>
                        </div>
                        <div id="calendar-modal" class="form-text">Verifique a disponibidade no calendário <a href="#">clique aqui</a></div><br>


                        
            <div class="modal" id="meuModal">
                <div class="modal-dialog">
                   <div class="modal-content">

                      <!-- Cabeçalho do Modal -->
                      <div class="modal-header">
                         <h4 class="modal-title">Calendário das Comunidades</h4>
                         <button type="button" id="fechar" class="close" data-dismiss="modal">&times;</button>
                      </div>


                      <!-- Corpo do Modal -->
                      <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                            <h6 style="color:#f4bc08">Datas agendadas</h6>
                            @foreach ($datas as $data)
                                
               
                            <div class="calendar">
                                <ul>
                                    <li>{{ $data['comunidade']}}: {{$data['data_inicial']}} - {{$data['data_final']}}</li>
                              
                                </ul>
                            </div>

                            @endforeach
                      </div>

                   </div>
                </div>
             </div>



                        <div class="mb-3">
                            <label for="dias" class="form-label">Dias:</label>
                            <input type="number" class="form-control" id="dias" name="dias" disabled>
                        </div>

                        <button type="button" id="next1" class="btn btn-primary next-step">Continuar</button >

                    </div>

                    <div class="step step-2">
                        <!-- Step 2 form fields here -->
                        <h3>Pessoas e Atividades</h3>
                        <div class="mb-3">
                        <label for="pessoas" class="form-label">Quantidade de pessoas:</label>
                        <input type="number" id="pessoas" class="form-control" name="pessoas">
                        </div>
                        <label for="field2" class="form-label">Selecione as Atividades: (clique no campo)</label>

                        <div class="mb-3 select-container">
                            <div class="col-lg-4 d-flex justify-content-center align-items-center">
                                <select class="js-select2 select-dd" id="opcoes_comunidade" name="atividades[]" multiple="multiple" >

                                </select>
                        </div>

                        </div>

                        <div id="atividade-page" class="form-text">Quer conhecer mais as atividades? <a href="/atividades">clique aqui</a></div><br>

                        <button type="button" class="btn btn-primary prev-step">Anterior</button>
                        <button type="button" id="continuar-resultado" class="btn btn-primary next-step">Continuar</button>
                    </div>

                    <div class="step step-3">
                        <!-- Step 3 form fields here -->
                        <h3>Seu Pacote</h3>

                         <div id="respostas">

                         </div>
                         <br>

                        <button type="button" class="btn btn-primary prev-step">Anterior</button>
                        <button type="button" id="enviarDados" class="btn btn-success">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

  <script>

    let currentStep = 1;
    let updateProgressBar;
    let comunidades = @json($comunidades);
    let opcoes = @json($opcoes);
    let comunidade_escolhida = 0;
    let opcoes_comunidade =  [];
    let option = '';
    let opcao_preco = null;


    $(document).ready(function() {

        let dados = {};
        let resultado = '';
        let soma = 0;
        var valoresUnicos = new Set();
        $('#loading').fadeOut();
        $('#message-data-ocupado').fadeOut();
        $('#message-data-disponivel').fadeOut();
        $('#message-dias-ocupado').fadeOut();
        $('#message-dias-disponivel').fadeOut();

        $('#calendar-modal').click(function(){
            $("#meuModal").fadeIn();

        });

        $('#comunidade').change(function() {
         // Habilitar o campo de data se uma comunidade for selecionada
          $('#data').prop('disabled', false);
       });

        $('#data').change(function() {
         // Habilitar o campo de data se uma comunidade for selecionada
          $('#dias').prop('disabled', false);
       });

                
        $("#fechar").click(function () {

            $("#meuModal").fadeOut();

        });

        $('#comunidade').on('change', function() {
            dados.comunidade = $(this).val();

            console.log(dados.comunidade);
            console.log(dados);

            comunidades.map(function(comunidade){
               if(comunidade.nome ==  dados.comunidade ){
                    comunidade_escolhida = comunidade.id;

               }
            });

            opcoes.map(function(opcoe){

                if(opcoe.comunidade_id ==  comunidade_escolhida){
                    opcoes_comunidade.push(opcoe);
               }
            })

            $('#opcoes_comunidade').empty();

            opcoes_comunidade.forEach(function(opcao) {


                    option = $('<option></option>').attr('value', JSON.stringify(opcao.preco)).attr('title', JSON.stringify(opcao.por_pessoa)).text(opcao.nome);



                $('#opcoes_comunidade').append(option);
            });

      });

        $('#data').on('input', function() {
            dados.data = $(this).val();

            let formData = {
               
                data: dados.data,
                comunidade: dados.comunidade
             };


             verificarData(formData);
       
       
        });


        $('#dias').on('input', function() {
            dados.dias = $(this).val();

            let formData = {
               
               data: dados.data,
               comunidade: dados.comunidade,
               dias: dados.dias
            };


            verificarDias(formData);
      

        });

        $('#pessoas').on('input', function() {
            dados.pessoas = $(this).val();

        });

        $('#opcoes_comunidade').select2();

        $('#opcoes_comunidade').on('change', function() {

            dados.opcoes = $('#opcoes_comunidade').select2('data');


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


                if (opcao.title == "true") {
                    opcao_preco = parseFloat(opcao.id);
                    opcao_preco = opcao_preco * dados.pessoas;

                }else{
                    opcao_preco = parseFloat(opcao.id) ;
                }

                console.log(opcao_preco);

                valoresUnicos.add(opcao_preco );

            });


            let arrayValoresUnicos = Array.from(valoresUnicos);

            let soma = arrayValoresUnicos.reduce(function(acc, valor) {

                return acc + valor ;

            }, 0);


            function arredondarParaMultiploDe5(numero) {
                    return Math.round(numero / 5) * 5;
                }

            dados.precototal = arredondarParaMultiploDe5(soma);



            let precototal = '<i class="fa fa-money-bill" aria-hidden="true"> <strong> Preço Total: </strong> ' + 'R$' + Math.floor(soma)

            resultado = comunidade + data + dias + pessoas + '<strong> Opções selecionadas: </strong> <br>';


            dados.opcoes.forEach(function(opcao) {
                if (opcao.title == "true") {
                    resultado += opcao.text + ' R$' + Math.floor( opcao.id  * dados.pessoas ) + '<br>';
                }else{
                    resultado += opcao.text + ' R$' + Math.floor(opcao.id)+ '<br>';
                }

            });

            resultado += '<br>'+ precototal;

            exibirResultado();
        });

    

    function verificarData(formData) {
       
        $('#loading').fadeIn();


        $.ajax({
                type: 'POST',
                url: '/pacoteperso/verificardata',
                data: { _token: '{{ csrf_token() }}', formData },
                success: function (response) {

                    $('#loading').fadeOut();
                   
        
                    if (response) {
                        
                        $('#message-data-disponivel').fadeIn();
                    }else{
                  
                        $('#message-data-ocupado').fadeIn();
                    }


                },
                error: function (error) {
                 
                    console.log(error);
                }

                });

    }

    function verificarDias(formData){
        $('#loading').fadeIn();


        $.ajax({
                type: 'POST',
                url: '/pacoteperso/verificardias',
                data: { _token: '{{ csrf_token() }}', formData },
                success: function (response) {

                    $('#loading').fadeOut();

            
                   
        
                    if (response) {
                        
                        $('#message-dias-disponivel').fadeIn();
                    }else{
                  
                        $('#message-dias-ocupado').fadeIn();
                    } 


                },
                error: function (error) {
                 
                    console.log(error);
                }

                });
    }

      function exibirResultado() {


        $('#respostas').html(resultado);
      }

      $('#enviarDados').click(function () {

        let formData = {
            comunidade: dados.comunidade,
            data: dados.data,
            dias: dados.dias,
            pessoas: dados.dias,
            opcoes:  [],
            precototal: dados.precototal
        };

        dados.opcoes.map(function(opcoe){

            formData.opcoes.push({ atividade: opcoe.text , preco: opcoe.id});
         });

         console.log(formData);


          //   $('#loading').fadeIn();

            $.ajax({
                type: 'POST',
                url: '/pacoteperso/criarpacotepersonalizado',
                data: { _token: '{{ csrf_token() }}', formData },
                success: function (response) {

                  //  $('#loading').fadeOut();

                    window.location.href = response;


                },
                error: function (error) {
                    // Lógica para tratar erros (se necessário)
                    console.log(error);
                }

                });
            });


    });




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


        #comunidade-page{
            color: white;
        }
        #atividade-page{
            color: white;
        }

        #calendar-modal{
            color: white;
        }

        a{
            color:#f4bc08;

        }

        /* calendar */

        .calendar {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
            font-size: 16px;
            color: #555;
        }

        /*  */

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

        #loading {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
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
