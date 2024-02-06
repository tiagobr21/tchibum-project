<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Opcoe;


class Pacote extends Model
{
    protected $table = 'pacotes';
    protected $fillable = ['nome','titulo','descricao','imagem_principal','imagens_secundarias','preco','data','infos','video'];

    protected $casts = [
        'imagens_secundarias' => 'array',
    ];

    public function opcoes()
    {
        return $this->belongsToMany(Opcoe::class, 'pacoteopcoe', 'pacote_id', 'opcao_id');
    }
}
