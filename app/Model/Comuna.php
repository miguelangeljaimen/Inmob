<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    protected $table = 'comunas';
    public $primaryKey = 'id';
    public $timestamps = 'false';

    public static function comunas($id){
    	return Comuna::where('id_provincia','=',$id)->get();
    }
}
