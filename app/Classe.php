<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = ['description', 'duracao', 'sigla'];
}
