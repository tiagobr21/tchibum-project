<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunidade extends Model
{

    protected $table = 'comunidades';
    protected $fillable = ['nome','descricao','latitude','longitude','endereço','imagem_principal','video'];

}
