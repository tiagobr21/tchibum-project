<?php

/* use App\Models\Home;
use App\Models\Depoimentos;
use App\Models\Sobre;
use App\Models\Posts;

$home = Home::find(1);
$depoimentos = Depoimentos::all();
$sobre = Sobre::find(1);
$posts = Posts::all();

return [
    // home
    'titulo_principal' => $home->titulo_principal . PHP_EOL,
    'descricao_bem_vindo' => $home->descricao_bem_vindo . PHP_EOL,
    'descricao_atividade_comunidade1' => $home->descricao_atividade_comunidade1 . PHP_EOL,
    'descricao_atividade_comunidade2' => $home->descricao_atividade_comunidade2 . PHP_EOL,
    'descricao_atividade_comunidade3' => $home->descricao_atividade_comunidade3 . PHP_EOL,
    'descricao_atividade_comunidade4' => $home->descricao_atividade_comunidade4 . PHP_EOL,
    'pacotes' => 'pacotes' . PHP_EOL,
    'comunidades_que_atuamos' => 'COMUNIDADES QUE ATUAMOS' . PHP_EOL,
    'o_que_oferecemo_de_melhor' => 'O que oferecemos de melhor' . PHP_EOL,
    'nossas_atividades' => 'Nossas Atividades' . PHP_EOL,
    'nossas_atividades' => 'Nossas Atividades' . PHP_EOL,
    'momentos' => 'Momentos' . PHP_EOL,
    'ler_mais' => 'Ler mais' . PHP_EOL,
    'galeria' => 'Galeria' . PHP_EOL,
    'depoimentos' => $depoimentos,

    // sobre
    'sobre_nos' => 'Sobre nós' . PHP_EOL,
    'sobre_titulo' => $sobre->titulo_principal . PHP_EOL,
    'sobre_texto' => $sobre->sobre . PHP_EOL,
    'sobre' => 'Sobre' . PHP_EOL,
    'descricao_atividade_comunidade1' => $sobre->descricao_atividade_comunidade1 . PHP_EOL,
    'descricao_atividade_comunidade2' => $sobre->descricao_atividade_comunidade2 . PHP_EOL,
    'descricao_atividade_comunidade3' => $sobre->descricao_atividade_comunidade3 . PHP_EOL,
    'descricao_atividade_comunidade4' => $sobre->descricao_atividade_comunidade4 . PHP_EOL,

    // posts
    'post_titulo' => array_map(function ($post) {
        return $post['titulo'] . PHP_EOL;
    }, $posts->toArray()),
    'post_descricao' => array_map(function ($post) {
        return $post['descricao'] . PHP_EOL;
    }, $posts->toArray()),
    'titulo_principal' => $home->titulo_principal . PHP_EOL,
    'titulo_principal' => $home->titulo_principal . PHP_EOL,
    'titulo_principal' => $home->titulo_principal . PHP_EOL,
    'titulo_principal' => $home->titulo_principal . PHP_EOL,
    'titulo_principal' => $home->titulo_principal . PHP_EOL,
    'titulo_principal' => $home->titulo_principal . PHP_EOL,
];
 */

use App\Models\Home;
use Statickidz\GoogleTranslate;

$tr = new GoogleTranslate();

$home = Home::find(1);

return [

    // home
    'titulo_principal' => $tr->translate('pt', 'es', $home->titulo_principal), PHP_EOL,
];

