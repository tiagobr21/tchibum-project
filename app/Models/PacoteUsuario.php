<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PacoteUsuario extends Model
{
    protected $table = 'pacoteusuarios';
    protected $fillable = ['pacote_id', 'user_id','data','status'];

}
