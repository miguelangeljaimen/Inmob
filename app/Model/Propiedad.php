<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    protected $table = 'propiedades';
    public $primaryKey = 'id_propiedad';

    protected $fillable = [
    'id_cliente', 
    'id_region', 
    'id_provincia', 
    'id_comuna', 
    'id_categoria', 
    'bagnos', 
    'dormitorios', 
    'bodega', 
    'agua', 
    'luz', 
    'valor_uf', 
    'valor_cl'
    ];

    protected $hidden = ['id_propiedad'];
}
