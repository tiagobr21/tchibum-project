<h2>Nova Solicitação de Compra de Pacote</h2>
<h4>Informações da Compra: </h4>
<div id="pacote">
    <p> <strong>Pacote:</strong>  {{$pacote->nome}}</p>
    <p>  <strong>Preço:</strong> R${{$pacote->preco}}</p>
    <p> <strong>Data:</strong> {{date('d/m/Y', strtotime($pacote->data))}}</p>

</div>

<div id="pacote">
    <p> <strong>Quantidade de Pessoas:</strong> {{$pacote->pessoas}}</p>
    <p> <strong>Dias do Pacote:</strong> {{$pacote->dias}}</p>
    <p> <strong>Comunidade:</strong> {{$pacote->comunidade->nome}}</p>
</div>

<h4>Informações do Cliente: </h4>
<div>
    <p> <strong>Nome:</strong> {{$user->name}}</p>
    <p> <strong>Email:</strong> {{$user->email}}</p>
</div>


<style>
    #pacote{
        display: flex;

    }

    #pacote p{
        margin-left: 10px;

    }
</style>
