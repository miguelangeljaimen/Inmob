<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    public $primaryKey = 'id_categoria';
   	public $timestamps = false;
    protected $fillable = [
    	'nombre_categoria',
    	'alias_categoria'
    ];

    protected $hidden = ['id_categoria'];
}
}
