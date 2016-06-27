<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Region;
use App\Model\Comuna;
use App\Model\Provincia;

class HomeController extends Controller
{
    public function index()
    {
    	$regiones = Region::lists('nombre_region', 'id_region');//aqui ingrso en primer lugar lo que quiero que muestre el select y luego el valur o lo que quiero que sea enviado por el select.
        $provincias = Provincia::lists('nombre_provincia', 'id_provincia');
        $comunas = Comuna::lists('nombre_comuna', 'id_comuna');


        //return \View::make('home', ['regiones'=>$regiones, 'comunas'=>$comunas]);  //linea profesor (funciona) 
        return \View::make('home', compact('regiones', 'provincias', 'comunas'));   //linea tutoial (funciona)
    	
    }

    public function getProvincias(Request $request, $id){
        if ($request->ajax()) {
            $provincias = Provincia::provincias($id);
            return response()->json($provincias);
        }

    }

    public function getComunas(Request $request, $id){
        if ($request->ajax()) {
            $comunas = Comuna::comunas($id);
            return response()->json($comunas);
        }

    }


     public function login()
    {
        return \View::make('login');   
    }
}
