<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoPagamento extends Model
{
    use SoftDeletes;

    protected $table = 'tipos_pagamentos';
    protected $primaryKey = 'id_tipo_pagamento';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //Campos que podem ser visualizados/manipulados fora da classe
    protected $fillable = [
        'tipo_pagamento'
    ];
}
