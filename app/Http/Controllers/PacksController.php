<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacote;
use App\Models\User;

class PacksController extends Controller
{
    public function index(){
        $pacotes = Pacote::with('comunidade')->latest()->paginate(3);

        return view('packs',compact('pacotes'));
    }

    public function pack(Pacote $pacote){
        $pacote = $pacote->with('comunidade','opcoes')->find( $pacote->comunidade_id);

        return view('pack',compact('pacote'));
    }

    public function solicitacaCompra(Pacote $pacote){

      dd($pacote);

    }

    public function addDadosComple(Request $request, User $user){

        $user->cpf =  $request->cpf;
        $user->uf =  $request->uf;
        $user->endereco =  $request->endereco;
        $user->cep =  $request->cep;
        $user->cidade =  $request->cidade;
        $user->identificao =  $request->identificao;
        $user->proficao =  $request->proficao;
        $user->nacionalidade =  $request->nacionalidade;
        $user->estado =  $request->estado;

        $user->save();


       return 'Seus dados foram enviados clique em Comprar Novamente';

    }
}
