<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Opcao;


class Pacote extends Model
{
    protected $table = 'pacotes';
    protected $fillable = ['nome','titulo','descricao','imagem_principal','imagens_secundarias','preco','data','infos','video'];
   
    public function opcoes()
    {
        return $this->belongsToMany(Opcao::class, 'pacotes_opcoes', 'pacote_id', 'opcao_id');
    }
}
