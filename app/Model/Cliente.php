<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    public $primaryKey = 'id_cliente';

    protected $fillable = [
    	'nombre_cliente',
    	'rut_cliente',
    	'email_cliente',
    	'fono_cliente'
    ];

    protected $hidden = ['id_cliente'];

      public function getPropiedades()
    {
//        return $this->hasMany('App\Model\Propiedad', 'id_cliente', 'id_cliente');
        return $this->hasMany('App\Model\Propiedad', 'id_cliente', 'id_cliente');
    }

}

