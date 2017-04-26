<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class associado extends Model
{
    protected $fillable = ['endereco', 'data_nascimento', 'numero', 'status', 'sexo', 'nome'] ;
    protected $dates = ['data_nascimento'];
}
