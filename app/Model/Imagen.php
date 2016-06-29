<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
     protected $table = 'imagenes';
    public $primaryKey = 'id';

        protected $fillable = [
    	'nombre',
    	'id_propiedad'
    	];

    protected $hidden = ['id'];
}
