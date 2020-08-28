<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'nome', 'desc','nome_user','id_usuario'
    ];
}
