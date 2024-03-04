<?php

use App\Models\Home;
use App\Models\Depoimentos;
use App\Models\Sobre;
use App\Models\Posts;
use Statickidz\GoogleTranslate;

$tr = new GoogleTranslate();


$home = Home::find(2);
$sobre = Sobre::find(2);
$posts = Posts::all();


return [
    // home

    'titulo_principal' => $home->titulo_principal, PHP_EOL,
    'pacote_fechado' => 'Closed Packages', PHP_EOL,
    'pacote_personalizado' => 'Customized Packages', PHP_EOL,
    'titulo_bem_vindo' => $home->titulo_bem_vindo, PHP_EOL,
    'descricao_bem_vindo' => $home->descricao_bem_vindo, PHP_EOL,
    'home_descricao_atividade_comunidade1' => $home->descricao_atividade_comunidade1, PHP_EOL,
    'home_descricao_atividade_comunidade2' => $home->descricao_atividade_comunidade2, PHP_EOL,
    'home_nome_atividade_comunidade1'=> $home->nome_atividade_comunidade1, PHP_EOL,
    'home_nome_atividade_comunidade2'=> $home->nome_atividade_comunidade2, PHP_EOL,
    'home_nome_atividade_comunidade3'=> $home->nome_atividade_comunidade3, PHP_EOL,
    'home_nome_atividade_comunidade4'=> $home->nome_atividade_comunidade4, PHP_EOL,
    'home_descricao_atividade_comunidade3' => $home->descricao_atividade_comunidade3, PHP_EOL,
    'home_descricao_atividade_comunidade4' => $home->descricao_atividade_comunidade4, PHP_EOL,
    'pacotes' => 'Packages' , PHP_EOL,
    'dias_de_tour'=> 'Tour days',
    'comunidades_que_atuamos' => 'COMMUNITIES WE WORK', PHP_EOL,
    'o_que_oferecemo_de_melhor' => 'What we offer best', PHP_EOL,
    'nossas_atividades' => 'Our Activities', PHP_EOL,
    'momentos' => 'Moments', PHP_EOL,
    'ler_mais' => 'Read more', PHP_EOL,
    'galeria' => 'Gallery', PHP_EOL,
  
    // sobre
    
    'sobre_nos' => 'About us', PHP_EOL,
    'sobre_titulo' => $sobre->titulo_principal, PHP_EOL,
    'sobre_texto' => $sobre->sobre, PHP_EOL,
    'sobre' => 'About us', PHP_EOL,
    'sobre_descricao_atividade_comunidade1' => $sobre->descricao_atividade_comunidade1, PHP_EOL,
    'sobre_descricao_atividade_comunidade2' => $sobre->descricao_atividade_comunidade2, PHP_EOL,
    'sobre_nome_atividade_comunidade1'=> $sobre->nome_atividade_comunidade1, PHP_EOL,
    'sobre_nome_atividade_comunidade2'=> $sobre->nome_atividade_comunidade2, PHP_EOL,
    'sobre_nome_atividade_comunidade3'=> $sobre->nome_atividade_comunidade3, PHP_EOL,
    'sobre_nome_atividade_comunidade4'=> $sobre->nome_atividade_comunidade4, PHP_EOL,
    'sobre_descricao_atividade_comunidade3' => $sobre->descricao_atividade_comunidade3, PHP_EOL,
    'sobre_descricao_atividade_comunidade4' => $sobre->descricao_atividade_comunidade4, PHP_EOL,

    //fale conosco 

    'fale_conosco' => 'Contact Us', PHP_EOL,
    'orientacao1' => 'Need guidance or', PHP_EOL,
    'orientacao2' => 'any question? We are available', PHP_EOL,
    'whatsapp' => 'CLICK HERE AND CONTACT US BY WHATSAPP', PHP_EOL,
    'email' => 'CONTACT US BY EMAIL', PHP_EOL,
    'mensagem' => 'Or write your message here', PHP_EOL,
    'nome_cliente' => 'Your Name', PHP_EOL,
    'email_cliente' => 'Your Email', PHP_EOL,
    'assunto_cliente' => 'Subject', PHP_EOL,
    'mensagem_cliente' => 'Message', PHP_EOL,

    // compras

    'opcoes' => 'Choose an Option', PHP_EOL,


     // pacote fechado

     'comprar' => 'Purchase', PHP_EOL,
     'data' => 'Date', PHP_EOL,
     'qauntidade_de_pessoas' => 'Amount of people', PHP_EOL,
     'qauntidade_de_dias' => 'Number of days', PHP_EOL,
     'comunidade' => 'Community', PHP_EOL,
     'nome' => 'Name', PHP_EOL,
     'preco' => 'Price', PHP_EOL,
     'informacao' => 'Information', PHP_EOL,
     'informacao_adicional' => 'Additional Information', PHP_EOL,
     'e_estrangeiro'=> 'Are you a foreigner?', PHP_EOL, 
     'endereco'=> 'Address', PHP_EOL,
     'cidade'=> 'City', PHP_EOL,
     'identificacao' => 'Identification (If you are a Foreigner)', PHP_EOL,
     'proficao' => 'Profession', PHP_EOL,
     'nacionalidade' => 'Nationality', PHP_EOL,
     'estado' => 'State', PHP_EOL,
     'enviar' => 'Submit', PHP_EOL,

    // pacote fechado

    'ja_existe_agendamento' => 'There is already a schedule for that date', PHP_EOL,
    'data_esta_disponivel'=> 'The date is available', PHP_EOL,
    'colidem' => 'Days collide with another schedule', PHP_EOL,
    'conformidade' => 'The days are in conformity', PHP_EOL,

];

// GOOGLE TRANSLATE

  // https://github.com/statickidz/php-google-translate-free/issues/38

  /*   'post_titulo' => array_map(function ($post) use ($tr) {
        return $tr->translate('pt', 'en', $post['titulo']);
    }, $posts->toArray()),

    'post_descricao' => array_map(function ($post) use ($tr) {
        return $tr->translate('pt', 'en', $post['descricao']);
    }, $posts->toArray()),
    */



