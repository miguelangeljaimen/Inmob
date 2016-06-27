<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cantidad extends Model
{
    protected $table = 'cantidades';
    public $primaryKey = 'id_cantidad';
    public $timestamps = false;


    protected $fillable = [
    	'nombre_cantidad'
    ];

    protected $hidden = ['id_cantidad'];
}
