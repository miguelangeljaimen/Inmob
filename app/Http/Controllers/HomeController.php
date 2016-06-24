<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Region;
use App\Model\Comuna;

class HomeController extends Controller
{
    public function index()
    {
    	$regiones = Region::lists('nombre_region', 'id_region');
    	$comunas = Comuna::lists('nombre_comuna', 'id_comuna');

        return \View::make('home', ['regiones'=>$regiones, 'comunas'=>$comunas]);   
    	
    }
     public function login()
    {
        return \View::make('login');   
    }
}
