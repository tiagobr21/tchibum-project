<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PacotePersonalizado;
use App\Models\PacotePersoUsuario;
use App\Models\User;
use App\Models\Comunidade;
use App\Models\Opcoe;
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

    protected function EnviarSolicitacao($pacotepersonalizado){


       $pacote = PacotePersonalizado::with('comunidade','opcoes')->find($pacotepersonalizado);

       $user = User::find($pacote->user_id);


        $email_tchibum = 'tchibumnaamazonia@gmail.com';

        $mail = Mail::to([$user->email,$email_tchibum])->send(new PacotePersonalizados([
            'pacote'=> $pacote,
            'user'=> $user,
        ]));

        return redirect('/');
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
