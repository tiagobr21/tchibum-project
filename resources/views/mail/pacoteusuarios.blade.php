<div class="container">
    <h1>Nova Solicitação de Compra (Pacote Fixo)</h1>
    <h4>Informações da Compra: </h4>
    <div id="pacote">
        <p> <strong>Pacote:</strong>  {{$pacote->nome}}</p>
        <p>  <strong>Preço:</strong> R$ {{$pacote->preco}}</p>
        <p> <strong>Data:</strong> {{date('d/m/Y', strtotime($pacote->data))}}</p>

    </div>

    <div id="pacote">
        <p> <strong>Quantidade de Pessoas:</strong> {{$pacote->pessoas}}</p>
        <p> <strong>Dias do Pacote:</strong> {{$pacote->dias}}</p>
        <p> <strong>Comunidade:</strong> {{$pacote->comunidade->nome}}</p>
    </div>

    <h4>Informações do Cliente: </h4>
    <div id="user">
        <p> <strong>Nome:</strong> {{$user->name}}</p>
        <p> <strong>Email:</strong> {{$user->email}}</p>
    </div>
    <p>Atenciosamente,<br>Seu Nome<br>Seu Cargo<br>Nome da Sua Empresa</p>
    <a href="https://www.exemplo.com" class="button">Acompanhe sua Compra</a>
  </div>



<style>

body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1,h4 {
      color: #333;
    }

    p {
      color: #666;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #3498db;
      color: #fff;
      text-decoration: none;
      border-radius: 3px;
    }
    #pacote{
        display: flex;

    }

    #pacote p{
        margin-left: 10px;

    }

    #user p{
        margin-left: 10px;

    }
</style>
