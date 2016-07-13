<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Cliente;
use App\Model\Region;
use Laracasts\Flash\Flash;
use App\Model\Propiedad;
use App\Model\Publicacion;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = Publicacion::orderBy('id', 'desc')->paginate(10);
        return view('admin.publicaciones.index')->with('publicaciones',$publicaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $propiedad=$id;
        return view('admin.publicaciones.create')->with('propiedad',$propiedad);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
      //dd($request);
       $publicacion = new Publicacion;
            $publicacion->id_propiedad = $request->propiedad;
            $publicacion->id_user = $request->user;
            $publicacion->titulo = $request->titulo;
            $publicacion->descripcion = $request->descripcion;
            $publicacion->valor_uf = $request->valor_uf;
            $publicacion->valor_cl = $request->valor_cl;
            
            $publicacion->save();

            $propiedad = Propiedad::find($request->propiedad);
            //$propiedad->id_cliente = $request->cliente; 
            $propiedad->estado = 'publico';
            
            $propiedad->save();

            Flash::info('Se ha publicado una nueva propiedad exitosamente!!');


                $file = $request->file('imagen');
                $nombre = 'inmob_'. time(). '_'. $file->getClientOriginalExtension();
                $path = public_path().'/imagenes/propiedades/';
                $file->move($path,$nombre);
                $imagen = new Imagen;
                $imagen->nombre = $nombre;
                $imagen->id_propiedad = $request->propiedad;


            return redirect()->route('admin.publicaciones.index');


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
         $publicacion = Publicacion::find($id);
       return view('admin.publicaciones.edit')->with('publicacion', $publicacion);
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicacion = Publicacion::find($id);
        $propiedad = $publicacion->id;
        $propiedad = Propiedad::find($propiedad);
            //$propiedad->id_cliente = $request->cliente; 
        $propiedad->estado = 'privado';
        $publicacion->delete();    
        $propiedad->save();
        
        Flash::info('la propiedad de '.$propiedad->getCliente->nombre_cliente.' fué eliminado exitosamente!!');
        
        //$propiedad->id_cliente = $request->cliente;
        //Flash::success('El cliente'.$cliente->nombre.'ha sido borrado exitosamente!');
        return redirect()->route('admin.publicaciones.index');
    }

}
