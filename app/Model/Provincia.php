<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincia';
    public $primaryKey = 'id_provincia';
    public $timestamps = 'false';

    public static function provincias($id){
    	return Provincia::where('id_region','=',$id)->get();
    }
}
