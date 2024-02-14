<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacote;

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

        dd( $pacote);


    }
}
