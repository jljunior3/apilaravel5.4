<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $table = 'contas';
    protected $fillable = ['titulo', 'agencia', 'numero_conta', 'balanco', 'balanco_inicial', 'bank_id'];

    public function banco()
    {
        return $this->belongsTo('App\Banco');
    }

}
