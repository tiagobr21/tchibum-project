<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posts;

class Opcoe extends Model
{
    protected $table = 'opcoes';
    protected $fillable = ['nome','titulo','descricao','imagem','preco'];

    public function pacotes()
    {
        return $this->belongsToMany(Pacote::class, 'pacotes_opcoes', 'opcao_id', 'pacote_id');
    }
}
