<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    protected $table = 'publicacao';

    protected $fillable = [
        'usuario',
        'data',
        'publicacao'
    ];
}
