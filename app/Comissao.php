<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comissao extends Model
{
    protected $table = 'comissao';

    protected $fillable = [
        'data',
        'valor',
        'categoria',
        'usuario'
    ];

    protected $casts = [
        'created_at' => 'datetime:d/m/Y',
        'updated_at' => 'datetime:d/m/Y',
    ];
}
