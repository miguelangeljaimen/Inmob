<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientess';
    public $primaryKey = 'id_cliente';

    protected $fillable = [
    	'rut_cliente',
    	'nombre_cliente',
    	'email_cliente',
    	'fono_cliente'
    ];

    protected $hidden = ['id_cliente'];
}
}
