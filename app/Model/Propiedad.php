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
    'direccion', 
    'id_categoria', 
    'bagnos', 
    'dormitorios', 
    'estado',
    'bodega', 
    'agua', 
    'luz'
    ];

    protected $hidden = ['id_propiedad'];

    public function getCliente(){
        return $this->belongsTo('App\Model\Cliente', 'id_cliente', 'id_cliente');
    }

    public function getRegion(){
        return $this->belongsTo('App\Model\Region', 'id_region', 'id');
    }

    public function getProvincia(){
        return $this->belongsTo('App\Model\Provincia', 'id_provincia', 'id');
    }

    public function getComuna(){
        return $this->belongsTo('App\Model\Comuna', 'id_comuna', 'id');
    }

    public function getCategoria(){
        return $this->belongsTo('App\Model\Categoria', 'id_categoria', 'id');
    }

    public function getBagnos(){
        return $this->belongsTo('App\Model\Cantidad', 'bagnos', 'id');
    }


    public function getDormitorios(){
        return $this->belongsTo('App\Model\Cantidad', 'dormitorios', 'id');
    }


    public function getPublicacion(){

         return $this->belongsTo('App\Model\Publicacion', 'id_propiedad', 'id_propiedad');
    }

    public function getImagen(){
        
     return $this->belongsTo('App\Model\Imagen', 'id_propiedad', 'id_propiedad');   
    }

    public function getPostulaciones(){

        return $this->hasMany('App\Model\Postulacion', 'id_propiedad', 'id_propiedad');  

    }


    public function getPostulacionUser($id){

        return Postulacion::where('id_usuario','=',$id);

    }

    public function scopeBuscar($query, $id){
        if($id !=''){
          return $query->where('id_cliente', $id);
         //dd($query);
          
        }   
    }


}
