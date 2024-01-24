<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pacotes_opcoes extends Model
{
    protected $table = 'pacotes_opcoes';
    protected $fillable = ['pacote_id', 'opcao_id'];
}
