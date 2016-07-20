<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Postulacion extends Model
{
   protected $table = 'postulaciones';
   protected $primaryKey = 'id_usuario, id_propiedad';

    protected $fillable = [
    	'id_usuario',
    	'id_propiedad',
    	'estado'
    ];

    protected $hidden = ['id'];

    public function getPropiedades()
    {
//        return $this->hasMany('App\Model\Propiedad', 'id_cliente', 'id_cliente');
        return $this->belongsTo('App\Model\Propiedad', 'id_propiedad', 'id_propiedad');
    }
	public function getUsuario()
    {
//        return $this->hasMany('App\Model\Propiedad', 'id_cliente', 'id_cliente');
        return $this->belongsTo('App\User', 'id_usuario', 'id_user');
    }
    public function buscar($id){
        return Postulacion::where('id_usuario','= 5');
    }
}
