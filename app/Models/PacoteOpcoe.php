<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PacoteOpcoe extends Model
{
    protected $table = 'pacoteopcoe';
    protected $fillable = ['pacote_id', 'opcao_id'];
}
