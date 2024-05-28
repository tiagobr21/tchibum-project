@extends('layout')
@section('title','payment')
@section('content')


<div class="checkout-panel">
          <div class="panel-body">
                  <h2 class="title">Checkout here!</h2>
              
                  <div class="progress-bar">
                    <div class="step active"></div>
                    <div class="step active"></div>
                    <div class="step"></div>
                    <div class="step"></div>
                  </div>
              
                  <div class="payment-method">
                    <label for="card" class="method card">
                      <div class="card-logos">
                        <img src="./credit-card-icon-vector.jpg"/>
                      </div>
              
                      <div class="radio-input">
                        <input id="card" type="radio" name="payment">
                          Cartão de Crédito
                      </div>
                    </label>
              
              
                      <label for="pix" class="method pix">
                        <img src="./logo-pix-icone-512.webp"/>
                        <div class="radio-input">
                          <input id="pix" type="radio" name="payment">
                            Pix
                        </div>
                      </label>
                      
                      <label for="boleto" class="method boleto">
                        <img src="./boleto.png"/>
                        <div class="radio-input">
                          <input id="boleto" type="radio" name="payment">
                            Boleto
                        </div>
                      </label>

                      <label for="whatsapp" class="method boleto">
                        <img src="./whatsapp.png"/>
                        <div class="radio-input">
                          <input id="whatsapp" type="radio" name="payment">
                            Whatsapp
                        </div>
                      </label>
                  </div>

              
              
                <div class="input-fields">

                  <div id="card-fields" class="column-1">
                      <label for="cardholder">Name</label>
                      <input type="text" id="cardholder" />
                    
                      <div class="small-inputs">
                              <div>
                                <label for="date">Valid date</label>
                                <input type="text" id="date"/>
                              </div>
                    
                              <div>
                                <label for="verification">CVV / CVC *</label>
                                <input type="password" id="verification"/>
                              </div>
                            </div>
                      </div>
                          
                      <div id="card-fields-2" class="column-2">
                          <label for="cardnumber">Card Number</label>
                            <input type="password" id="cardnumber"/>
                    
                          <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
                      </div>
        
                </div>

                <div id="pix-fields" class="column-1" style="display: none;">
                    <label for="cardholder">PIX</label>
                    <input type="text" id="cardholder" />
                </div>


                <div id="boleto-fields" class="column-1" style="display: none;">
                  <label for="cardholder">Boleto</label>
                  <input type="text" id="cardholder" />
                </div>

                <div id="whatsapp-fields" class="column-1" style="display: none;">
                  <label for="cardholder">Whatsapp</label>
                  <input type="text" id="cardholder" />
                </div>
        
        
          
            </div>

         

        
          <div class="panel-footer">
            <button class="btn back-btn">Back</button>
            <button class="btn next-btn">Next Step</button>
          </div>
        </div>


        <style>
    * {
     box-sizing: border-box;
   }
 
    html,
    body {
    font-family: 'Montserrat', sans-serif;
    font-size-adjust: u;
    display: flex;
    width: 100%;
    height: 100%;
    background: #eeeeee;
    justify-content: center;
    align-items: center;
    }

    .checkout-panel {
    display: flex;
    flex-direction: column;
    width: 940px;
    height: 766px;
    background-color: rgb(255, 255, 255);
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .2);
    }
    .panel-body {
    padding: 45px 80px 0;
    flex: 1;
    }
 
.title {
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 40px;
  color: #2e2e2e;
}
.progress-bar {
  display: flex;
  margin-bottom: 50px;
  justify-content: space-between;
}
 
.step {
  box-sizing: border-box;
  position: relative;
  z-index: 1;
  display: block;
  width: 25px;
  height: 25px;
  margin-bottom: 30px;
  border: 4px solid #fff;
  border-radius: 50%;
  background-color: #efefef;
}
 
.step:after {
  position: absolute;
  z-index: -1;
  top: 5px;
  left: 22px;
  width: 225px;
  height: 6px;
  content: '';
  background-color: #efefef;
}
 
.step:before {
  color: #2e2e2e;
  position: absolute;
  top: 40px;
}
 
.step:last-child:after {
  content: none;
}
 
.step.active {
  background-color: #1abc9c;
}
.step.active:after {
  background-color: #1abc9c;
}
.step.active:before {
  color: #1abc9c;
}
.step.active + .step {
  background-color: #1abc9c;
}
.step.active + .step:before {
  color: #1abc9c;
}
 
.step:nth-child(1):before {
  content: 'Cart';
}
.step:nth-child(2):before {
  right: -40px;
  content: 'Confirmation';
}
.step:nth-child(3):before {
  right: -30px;
  content: 'Payment';
}
.step:nth-child(4):before {
  right: 0;
  content: 'Finish';
}
.payment-method {
  display: flex;
  margin-bottom: 60px;
  justify-content: space-between;
}
 
.method {
  display: flex;
  flex-direction: column;
  width: 382px;
  height: 122px;
  padding-top: 20px;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: 2px;
  background-color: rgb(249, 249, 249);
  justify-content: center;
  align-items: center;
}

.pix img  {
  vertical-align: middle; /* Isso alinha verticalmente a imagem dentro do rótulo */
  width: 50px; /* Ajuste o tamanho da imagem conforme necessário */
  height: 50px; /* Ajuste o tamanho da imagem conforme necessário */
  margin-right: 10px; /* Adiciona um espaço entre a imagem e o texto */
}

.boleto img  {
  vertical-align: middle; /* Isso alinha verticalmente a imagem dentro do rótulo */
  width: 50px; /* Ajuste o tamanho da imagem conforme necessário */
  height: 50px; /* Ajuste o tamanho da imagem conforme necessário */
  margin-right: 10px; /* Adiciona um espaço entre a imagem e o texto */
}


.card img  {
  vertical-align: middle; /* Isso alinha verticalmente a imagem dentro do rótulo */
  width: 50px; /* Ajuste o tamanho da imagem conforme necessário */
  height: 50px; /* Ajuste o tamanho da imagem conforme necessário */
  margin-right: 10px; /* Adiciona um espaço entre a imagem e o texto */
}
 
.card-logos {
  display: flex;
  width: 150px;
  justify-content: space-between;
  align-items: center;
}
 
.radio-input {
  margin-top: 20px;
}
 
input[type='radio'] {
  display: inline-block;
}
.input-fields {
  display: flex;
  justify-content: space-between;
}

label{
  color: #b4b4b4;
  display: block;
  margin-bottom: 10px;
}

.info {
  font-size: 12px;
  font-weight: 300;
  display: block;
  margin-top: 50px;
  opacity: .5;
  color: #2e2e2e;
}
 
div[class*='column'] {
  width: 382px;
}
 
input[type='text'],
input[type='password'] {
  font-size: 16px;
  width: 100%;
  height: 50px;
  padding-right: 40px;
  padding-left: 16px;
  color: rgba(46, 46, 46, .8);
  border: 1px solid rgb(225, 225, 225);
  border-radius: 4px;
  outline: none;
}
 
input[type='text']:focus,
input[type='password']:focus {
  border-color: rgb(119, 219, 119);
}
 
#date { background: url(img/icons_calendar_black.png) no-repeat 95%; }
#cardholder { background: url(img/icons_person_black.png) no-repeat 95%; }
#cardnumber { background: url(img/icons_card_black.png) no-repeat 95%; }
#verification { background: url(img/icons_lock_black.png) no-repeat 95%; }
 
.small-inputs {
  display: flex;
  margin-top: 20px;
  justify-content: space-between;
}
 
.small-inputs div {
  width: 182px;
}
.panel-footer {
  display: flex;
  width: 100%;
  height: 96px;
  padding: 0 80px;
  background-color: rgb(239, 239, 239);
  justify-content: space-between;
  align-items: center;
}
.btn {
  font-size: 16px;
  width: 163px;
  height: 48px;
  cursor: pointer;
  transition: all .2s ease-in-out;
  letter-spacing: 1px;
  border: none;
  border-radius: 23px;
}
 
.back-btn {
  color: #1abc9c;
  background: #fff;
}
 
.next-btn {
  color: #fff;
  background: #1abc9c;
}
 
.btn:focus {
  outline: none;
}
 
.btn:hover {
  transform: scale(1.1);
}
.blue-border {
  border: 1px solid rgb(110, 178, 251);
}
.warning {
  border-color: #1abc9c;
}
  </style>

  <script>

    
    $(document).ready(function() {
      
        $('.method').on('click', function() {
          $('.method').removeClass('blue-border');
          $(this).addClass('blue-border');
        });


    })

    var $cardInput = $('.input-fields input');

    $('.next-btn').on('click', function(e) {

        $cardInput.removeClass('warning');

        $cardInput.each(function() {    
            var $this = $(this);
            if (!$this.val()) {
              $this.addClass('warning');
            }
        })


    });


        // Função para mudar para a opção de pagamento com cartão
        $('.method input[type="radio"][id="card"]').on('change', function() {
          $('#pix-fields').hide(); // Oculta a div da opção de pagamento com Pix
          $('#boleto-fields').hide(); // Oculta a div da opção de pagamento com Pix
          $('#whatsapp-fields').hide(); // Mostra a div da opção de pagamento com cartão
          $('#card-fields').show(); // Mostra a div da opção de pagamento com cartão
          $('#card-fields-2').show(); // Mostra a div da opção de pagamento com cartão
      });

      // Função para mudar para a opção de pagamento com Pix
      $('.method input[type="radio"][id="pix"]').on('change', function() {
          $('#card-fields').hide(); // Oculta a div da opção de pagamento com cartão
          $('#card-fields-2').hide(); // Oculta a div da opção de pagamento com cartão
          $('#boleto-fields').hide(); // Oculta a div da opção de pagamento com Pix
          $('#whatsapp-fields').hide(); // Mostra a div da opção de pagamento com cartão
          $('#pix-fields').show(); // Mostra a div da opção de pagamento com Pix
      });

      // Função para mudar para a opção de pagamento com Pix
      $('.method input[type="radio"][id="boleto"]').on('change', function() {
            $('#card-fields').hide(); // Oculta a div da opção de pagamento com cartão
            $('#card-fields-2').hide(); // Oculta a div da opção de pagamento com cartão
            $('#pix-fields').hide(); // Mostra a div da opção de pagamento com Pix
            $('#whatsapp-fields').hide(); // Mostra a div da opção de pagamento com cartão
            $('#boleto-fields').show(); // Oculta a div da opção de pagamento com Pix
      });

          // Função para mudar para a opção de pagamento com Pix
        $('.method input[type="radio"][id="whatsapp"]').on('change', function() {
            $('#card-fields').hide(); // Oculta a div da opção de pagamento com cartão
            $('#card-fields-2').hide(); // Oculta a div da opção de pagamento com cartão
            $('#pix-fields').hide(); // Mostra a div da opção de pagamento com Pix
            $('#boleto-fields').hide(); // Oculta a div da opção de pagamento com Pix
            $('#whatsapp-fields').show(); // Mostra a div da opção de pagamento com cartão
      });
  

  </script>


@endsection
