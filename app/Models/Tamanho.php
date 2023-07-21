<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tamanho extends Model
{
    use SoftDeletes;

    protected $table = 'tamanhos';
    protected $primaryKey = 'id_tipo_produto';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //Campos que podem ser visualizados/manipulados fora da classe
    protected $fillable = [
        'tipo'
    ];
}

