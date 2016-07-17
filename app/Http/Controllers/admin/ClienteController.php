<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Cliente;
use App\Model\Region;
use App\Model\Propiedad;
use App\Model\Publicacion;
use Laracasts\Flash\Flash;
//use App\Model\Propiedad;
use App\Http\Requests\ClienteRequest;


class ClienteController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
   /* public function __construct(){
        $this->middleware('auth');
        $this->middleware('administracion');
    }*/

    public function index()
    {   
        
        $numeros = $this->numeros();
        $propiedades = Propiedad::lists('id_propiedad');
        //dd($propiedades);
        $clientes = Cliente::orderBy('id_cliente', 'desc')->paginate(10);
        $publicaciones = Publicacion::lists('id');
        return view('admin.clientes.index')->with('clientes',$clientes)->with('propiedades',$propiedades)->with('publicaciones',$publicaciones)->with('numeros',$numeros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {   
        //dd('create');
        $numeros = $this->numeros();
         $propiedades = Propiedad::lists('id_propiedad');
         $clientes = Cliente::lists('nombre_cliente', 'id_cliente');
         $publicaciones = Publicacion::lists('id');
        return view('admin.clientes.create')->with('propiedades',$propiedades)->with('clientes',$clientes)->with('publicaciones',$publicaciones)->with('numeros',$numeros);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(ClienteRequest $request)
    {
        //dd('prueba');
      //return Cliente::create([
            //'nombre_cliente' => $request['nombre'],
            //'rut_cliente' => $request['rut'],
            //'email_cliente' => $request['email'],
            $cliente = new Cliente;
            $cliente->nombre_cliente = $request->nombre;
            $cliente->rut_cliente = $request->rut_cliente;
            $cliente->email_cliente = $request->email_cliente;
            $cliente->fono_cliente = $request->fono;
            
            $cliente->save();
                    Flash::info('El cliente '.$cliente->nombre_cliente. ' fué Creado exitosamente!!');
             return redirect()->route('admin.clientes.index');
            //dd($cli);
      
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
       $cliente = Cliente::find($id);
       $propiedades = Propiedad::lists('id_propiedad');
       $numeros = $this->numeros();
       return view('admin.clientes.edit')->with('cliente', $cliente)->with('propiedades',$propiedades)->with('numeros',$numeros);
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
        $cliente = Cliente::find($id);
        $cliente->nombre_cliente = $request->nombre;
        $cliente->rut_cliente = $request->rut_cliente;
        $cliente->email_cliente = $request->email_cliente;
        $cliente->fono_cliente = $request->fono;
        $cliente->save();
        Flash::success('El cliente '.$cliente->nombre_cliente.' fué editado exitosamente!!');
        return redirect()->route('admin.clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        Flash::info('El cliente '.$cliente->nombre_cliente.' fué eliminado exitosamente!!');
        //Flash::success('El cliente'.$cliente->nombre.'ha sido borrado exitosamente!');
        return redirect()->route('admin.clientes.index');
      //return view('admin.clientes.destroy');
    }

    public function info($id)
    {
         $cliente = Cliente::find($id);
        
         $clientes = Cliente::lists('nombre_cliente', 'id_cliente');
         $propiedades = Cliente::find($id)->getPropiedades()->paginate(10);
         $numeros = $this->numeros();

       return view('admin.clientes.info')->with('cliente', $cliente)->with('propiedades', $propiedades)->with('clientes', $clientes)->with('numeros', $numeros);
   }
}
