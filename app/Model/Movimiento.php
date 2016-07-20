<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $table = 'movimientos';

    protected $fillable = [
    	'id_propiedad',
    	'id_usuario',
    	'id_administrador',
    	'movimiento',
    	'nota'
    ];

    protected $hidden = ['id'];

    public function getPropiedades()
    {
//        return $this->hasMany('App\Model\Propiedad', 'id_cliente', 'id_cliente');
        return $this->hasMany('App\Model\Propiedad', 'id_propiedad', 'id_propiedad');
    }
	public function getAdministrador()
    {
//        return $this->hasMany('App\Model\Propiedad', 'id_cliente', 'id_cliente');
        return $this->hasMany('App\User', 'id_user', 'id_user');
    }
    
	public function getUsuario()
    {
//        return $this->hasMany('App\Model\Propiedad', 'id_cliente', 'id_cliente');
        return $this->hasMany('App\User', 'id_user', 'id_user');
    }
}
