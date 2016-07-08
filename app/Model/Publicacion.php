<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = 'publicaciones';

    protected $fillable = [
    'id_propiedad', 
    'id_user', 
    'titulo', 
    'descripcion', 
    'valor_uf', 
    'valor_cl', 

    ];

    protected $hidden = ['id'];

    public function getPropiedad(){
        return $this->belongsTo('App\Model\Propiedad', 'id_propiedad', 'id_propiedad');
    }

}
