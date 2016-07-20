<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
   protected $table = 'consultas';

    protected $fillable = [
    	'id_propiedad',
    	'id_usuario',
    	'asunto',
    	'mensaje',
    	'estado'
    ];

    protected $hidden = ['id'];

    public function getPropiedades()
    {
//        return $this->hasMany('App\Model\Propiedad', 'id_cliente', 'id_cliente');
        return $this->hasMany('App\Model\Propiedad', 'id_propiedad', 'id_propiedad');
    }
	
	public function getUsuario()
    {
//        return $this->hasMany('App\Model\Propiedad', 'id_cliente', 'id_cliente');
        return $this->hasMany('App\User', 'id_user', 'id_user');
    }
}
