<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pacote;
use App\Models\PacotePersonalizado;

class Opcoe extends Model
{
    protected $table = 'opcoes';
    protected $fillable = ['nome','titulo','descricao','imagem','preco'];

    public function pacotes()
    {
        return $this->belongsToMany(Pacote::class, 'pacoteopcoe', 'opcao_id', 'pacote_id');
    }

    public function pacoteperso()
    {
        return $this->belongsToMany(PacotePersonalizado::class, 'pacotepersoopcoe', 'opcaoperso_id', 'pacoteperso_id');
    }
}
