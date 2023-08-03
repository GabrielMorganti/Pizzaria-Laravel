<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoProduto extends Model
{
    use SoftDeletes;

    protected $table = 'tipos_produtos';
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

    public function produto() : object {
        return $this->hasOne(Produto::class,
                                'id_produto',
                                'id_produto');
    }
}
