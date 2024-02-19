<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PacotePersonalizado;
use App\Models\PacotePersoUsuario;
use App\Models\User;
use App\Models\Comunidade;
use App\Models\Opcoe;
use App\Models\Contato;
use App\Models\PacotePersoOpcoe;
use Illuminate\Support\Facades\Mail;
use App\Mail\PacotePersonalizados;

class PacksCustomControllers extends Controller
{
    public function index(){

        $comunidades = Comunidade::all();
        $opcoes = Opcoe::all();
        $user = auth()->user();

        return view('packscustoms',compact('comunidades','opcoes','user'));
    }


    public function createPacotePerso(Request $request){

        $response = $request->formData;
        $opcoes = [];

        $comunidade = Comunidade::where('nome',$response['comunidade'])->get();

        foreach ($response['opcoes'] as $key => $value) {
            array_push($opcoes , Opcoe::where('nome',$value['atividade'])->get());
        }


        $user = auth()->user();

        // Criar Pacote Personalizado

        $pacotepersonalizado = PacotePersonalizado::create([
            'preco' =>  $response['precototal'],
            'data' =>  $response['data'],
            'pessoas' => $response['pessoas'],
            'dias' => $response['dias'],
            'comunidade_id' => $comunidade[0]->id,
            'user_id' => $user->id,
        ]);

        // Criar Atividades Inclusas

        foreach ($opcoes as $key => $value) {

            $pacotepersoopcoe = PacotePersoOpcoe::create([
                'pacoteperso_id' =>  $pacotepersonalizado->id,
                'opcaoperso_id' =>  $value[0]->id,
            ]);
        }

        $this->enviarSolicitacao($pacotepersonalizado->id);

        $contato = Contato::find(1);
        $dataFormatada = date("d/m/y", strtotime($pacotepersonalizado->data));

        $mensagem = "Solicitação de Compra (Pacote Personalizado) :\n\n";
        $mensagem .= "Informações do Pacote:\n\n";
        $mensagem .= "Identificação do Pacote: " . $pacotepersonalizado->id . "\n";
        $mensagem .= "Preço: R$" . $pacotepersonalizado->preco . "\n";
        $mensagem .= "Data: " . $dataFormatada . "\n";
        $mensagem .= "Dias: " . $pacotepersonalizado->dias . "\n";
        $mensagem .= "Nome da Comunidade: " . $pacotepersonalizado->comunidade->nome . "\n\n";
        $mensagem .= "Informações das Atividades Inclusas: \n\n";
        foreach ($pacotepersonalizado->opcoes as $key => $opcao) {
            $mensagem .= "Atividade: " . $opcao->nome . "\n\n";
        }
        $mensagem .= "Informações do Cliente: \n\n";
        $mensagem .= "Nome: " . $user->name . "\n";
        $mensagem .= "Email: " . $user->email . "\n";

           // Montar o link do WhatsApp
        $linkWhatsApp = "https://wa.me/" . $contato->whatsapp. "/?text=" . rawurlencode($mensagem);

           // Redirecionar para o link do WhatsApp
        return $linkWhatsApp;

    }


    protected function enviarSolicitacao($pacotepersonalizado){


       $pacote = PacotePersonalizado::with('comunidade','opcoes')->find($pacotepersonalizado);

       $user = auth()->user();


        $email_tchibum = 'tchibumnaamazonia@gmail.com';

        $mail = Mail::to([$user->email,$email_tchibum])->send(new PacotePersonalizados([
            'pacote'=> $pacote,
            'user'=> $user,
        ]));
    }

     public function AprovarSolicitacao(PacotePersonalizado $pacotepersonalizado){

        $pacotepersonalizado->status = 'APROVADO';
        $pacotepersonalizado->save();

        return redirect('/admin/pacote-personalizados');
     }

     public function ReprovarSolicitacao(PacotePersonalizado $pacotepersonalizado){

        $pacotepersonalizado->status = 'REPROVADO';
        $pacotepersonalizado->save();

        return redirect('/admin/pacote-personalizados');
     }
}
