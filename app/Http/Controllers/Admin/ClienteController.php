<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Cliente;
use App\Model\Region;
use Laracasts\Flash\Flash;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::orderBy('id_cliente', 'desc')->paginate(10);
        return view('admin.clientes.index')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //return Cliente::create([
            //'nombre_cliente' => $request['nombre'],
            //'rut_cliente' => $request['rut'],
            //'email_cliente' => $request['email'],
            $cliente = new Cliente;
            $cliente->nombre_cliente = $request->nombre;
            $cliente->rut_cliente = $request->rut;
            $cliente->email_cliente = $request->email;
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
       return view('admin.clientes.edit')->with('cliente', $cliente);
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
        $cliente->rut_cliente = $request->rut;
        $cliente->email_cliente = $request->email;
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
}
