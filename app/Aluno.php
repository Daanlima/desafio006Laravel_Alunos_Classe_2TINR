<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['name', 'data_nascimento', 'email', 'cursoid'];
}
