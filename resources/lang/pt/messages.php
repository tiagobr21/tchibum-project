<?php



use App\Models\Home;
use App\Models\Sobre;
use App\Models\Depoimentos;
use App\Models\Posts;

$home = Home::find(1);
$sobre = Home::find(1);
$depoimentos = Depoimentos::all();
$posts = Posts::all();

    
return [

     // home

    'titulo_principal' => $home->titulo_principal, PHP_EOL,
    'pacote_fechado' => 'Pacotes Fechados', PHP_EOL,
    'pacote_personalizado' => 'Pacotes Personalizados', PHP_EOL,
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
    'pacotes' => 'Pacotes' , PHP_EOL,
    'dias_de_tour'=> 'Dias de Tour',
    'comunidades_que_atuamos' => 'COMUNIDADE QUE TRABALHAMOS', PHP_EOL,
    'o_que_oferecemo_de_melhor' => 'O que oferecemos de melhor', PHP_EOL,
    'nossas_atividades' => 'Nossas Atividades', PHP_EOL,
    'momentos' => 'Momentos', PHP_EOL,
    'ler_mais' => 'Ler mais', PHP_EOL,
    'galeria' => 'Galeria', PHP_EOL,


    // sobre
    
    'sobre_nos' => 'Sobre nós', PHP_EOL,
    'sobre_titulo' => $sobre->titulo_principal, PHP_EOL,
    'sobre_texto' => $sobre->sobre, PHP_EOL,
    'sobre' => 'Sobre', PHP_EOL,
    'sobre_descricao_atividade_comunidade1' => $sobre->descricao_atividade_comunidade1, PHP_EOL,
    'sobre_descricao_atividade_comunidade2' => $sobre->descricao_atividade_comunidade2, PHP_EOL,
    'sobre_nome_atividade_comunidade1'=> $sobre->nome_atividade_comunidade1, PHP_EOL,
    'sobre_nome_atividade_comunidade2'=> $sobre->nome_atividade_comunidade2, PHP_EOL,
    'sobre_nome_atividade_comunidade3'=> $sobre->nome_atividade_comunidade3, PHP_EOL,
    'sobre_nome_atividade_comunidade4'=> $sobre->nome_atividade_comunidade4, PHP_EOL,
    'sobre_descricao_atividade_comunidade3' => $sobre->descricao_atividade_comunidade3, PHP_EOL,
    'sobre_descricao_atividade_comunidade4' => $sobre->descricao_atividade_comunidade4, PHP_EOL,
     
   
    //fale conosco 

    'fale_conosco' => 'Fale Conosco', PHP_EOL,
    'orientacao1' => 'Precisa de alguma orientação ou', PHP_EOL,
    'orientacao2' => 'alguma pergunta ? Nós estamos disponíveis', PHP_EOL,
    'whatsapp' => 'CLIQUE AQUI E ENTRE EM CONTATO', PHP_EOL,
    'email' => 'ENTRE EM CONTATO PELO', PHP_EOL,
    'mensagem' => 'Ou escreva sua mensagem aqui', PHP_EOL,
    'nome_cliente' => 'Seu Nome', PHP_EOL,
    'email_cliente' => 'Seu Email', PHP_EOL,
    'assunto_cliente' => 'Assunto', PHP_EOL,
    'mensagem_cliente' => 'Mensagem', PHP_EOL,

    // compras

    'opcoes' => 'Escolha uma Opção', PHP_EOL,

    // pacote fechado

    'comprar' => 'Comprar', PHP_EOL,
    'data' => 'Data', PHP_EOL,
    'qauntidade_de_pessoas' => 'Quantidade de Pessoas', PHP_EOL,
    'qauntidade_de_dias' => 'Quantidade de Dias', PHP_EOL,
    'comunidade' => 'Comunidade', PHP_EOL,
    'nome' => 'Nome', PHP_EOL,
    'preco' => 'Preço', PHP_EOL,
    'informacao' => 'Informações', PHP_EOL,
    'informacao_adicional' => 'Informações Adicionais', PHP_EOL,
    'e_estrangeiro'=> 'Você é Estrangeiro?', PHP_EOL,
    'endereco'=> 'Você é Estrangeiro?', PHP_EOL,
    'cidade'=> 'Cidade', PHP_EOL,
    'identificacao' => 'Identificação ( Se for Estrangeiro)', PHP_EOL,
    'proficao' => 'Profissão', PHP_EOL,
    'nacionalidade' => 'Nacionalidade', PHP_EOL,
    'estado' => 'Estado', PHP_EOL,
    'enviar' => 'Enviar', PHP_EOL,

    // pacote fechado

    'ja_existe_agendamento' => 'Já existe agendamento para essa data', PHP_EOL,
    'data_esta_disponivel'=> ' A data está disponível', PHP_EOL,
    'colidem' => ' Os dias colidem com com outro agendamento', PHP_EOL,
    'conformidade' => 'Os dias estão em coformidade', PHP_EOL,

];




