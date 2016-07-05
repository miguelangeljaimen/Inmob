<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    public $primaryKey = 'id';
   	public $timestamps = false;
    protected $fillable = [
    	'nombre',
    	'alias'
    ];

    protected $hidden = ['id'];

}

