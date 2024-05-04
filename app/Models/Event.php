<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['date'];

    /**
     * Informando que tudo que for enviado pelo POST pode ser enviado para o banco de dados
     * A declaração protected $guarded = []; é usada em modelos Eloquent no Laravel, um framework de desenvolvimento web em PHP. Ela é usada para especificar quais atributos do modelo não devem ser considerados como "mass assignable" durante a criação ou atualização de registros no banco de dados. Quando você define $guarded como um array vazio ([]), você está indicando que nenhum atributo do modelo está protegido contra atribuições em massa. Isso significa que todos os atributos do modelo podem ser atribuídos em massa durante a criação ou atualização de registros.
     */
    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function users() {
        return $this->belongsToMany('App\Models\User');
    }
}
