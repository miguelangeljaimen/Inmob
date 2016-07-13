<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = 'publicaciones';

    protected $fillable = [
    'id_propiedad', 
    'id_user',
    'tipo', 
    'titulo', 
    'descripcion', 
    'valor_uf', 
    'valor_cl', 

    ];

    protected $hidden = ['id'];



}
