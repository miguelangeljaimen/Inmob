<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Propiedad;
use App\Model\Region;
use App\Model\Comuna;
use App\Model\Provincia;
use App\Model\Cliente;
use App\Model\Categoria;
use App\Model\Cantidad;

class PropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.propiedades.index');
    }

    /** fin index*/


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $regiones = Region::lists('nombre', 'id');//aqui ingrso en primer lugar lo que quiero que muestre el select y luego el valur o lo que quiero que sea enviado por el select.
        $provincias = Provincia::lists('nombre', 'id');
        $comunas = Comuna::lists('nombre', 'id');
        $clientes = Cliente::lists('nombre_cliente', 'id_cliente');
        $categorias = Categoria::lists('nombre', 'id');
        $cantidades = Cantidad::lists('nombre', 'id');

        return \View::make('admin.propiedades.create', compact('regiones', 'provincias', 'comunas','clientes','categorias','cantidades'));
    }

    public function getProvincias(Request $request, $id){
        if ($request->ajax()) {
            $provincia = Provincia::provincias($id);
            return response()->json($provincia);
        }

    }

    public function getComunas(Request $request, $id){
        if ($request->ajax()) {
            $comuna = Comuna::comunas($id);
            return response()->json($comuna);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*return Propiedad::create([
            'id_cliente'=> $request['cliente'], 
            'id_region'=> $request['region'], 
            'id_provincia'=> $request['prpovincia'], 
            'id_comuna'=> $request['comuna'], 
            'id_categoria'=> $request['categoria'], 
            'bagnos'=> $request['bagnos'], 
            'dormitorios'=> $request['dormitorios'], 
            'bodega'=> $request['bodega'], 
            'agua'=> $request['agua'], 
            'luz'=> $request['luz'], 
            'valor_uf'=> $request['uf'], 
            'valor_cl'=> $request['cl'],
        ]);*/

        $file = $request->file('imagen');
        $nombre = 'inmob_'. time(). '_'. $file->getClientOriginalExtension();
        $path = public_path().'/imagenes/propiedades/';
        $file->move($path,$nombre);
        dd($path);
       dd($nombre);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



}
