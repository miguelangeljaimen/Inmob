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
use App\Model\Imagen;
use App\Model\Cantidad;
use App\Model\Publicacion;
use Laracasts\Flash\Flash;
use App\Http\Requests\PropiedadRequest;



class PropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $clientes = Cliente::lists('nombre_cliente', 'id_cliente');
        $publicaciones = Publicacion::lists('id');
        $propiedades = Propiedad::buscar($request->get('id'))->orderBy('id_propiedad', 'desc')->paginate(10);
        $numeros = $this->numeros();
        return view('admin.propiedades.index')->with('propiedades',$propiedades)->with('clientes',$clientes)->with('publicaciones',$publicaciones)->with('numeros', $numeros);
        //return view('admin.propiedades.index');
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
        $propiedades = Propiedad::lists('id_propiedad');
        $publicaciones = Publicacion::lists('id');
        $numeros = $this->numeros();

        return \View::make('admin.propiedades.create', compact('regiones', 'provincias', 'comunas','clientes','categorias','cantidades'))->with('propiedades',$propiedades)->with('publicaciones',$publicaciones)->with('numeros', $numeros);
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
    public function store(PropiedadRequest $request)
    {
            $propiedad = new Propiedad;
            $propiedad->id_cliente = $request->cliente; 
            $propiedad->id_region = $request->region; 
            $propiedad->id_provincia = $request->provincia; 
            $propiedad->id_comuna = $request->comuna;
            $propiedad->direccion = $request->direccion;
            $propiedad->id_categoria = $request->categoria; 
            $propiedad->bagnos = $request->bagnos; 
            $propiedad->dormitorios = $request->dormitorios; 
            $propiedad->bodega = $request->bodega; 
            $propiedad->agua = $request->agua;
            $propiedad->luz = $request->luz;
            
            $propiedad->save();
            Flash::info('Se ha ingresado una nueva propiedad exitosamente!!');
           

        /*
        $file = $request->file('imagen');
        $nombre = 'inmob_'. time(). '_'. $file->getClientOriginalExtension();
        $path = public_path().'/imagenes/propiedades/';
        $file->move($path,$nombre);
        $imagen = new Imagen;
        $imagen->nombre = $nombre;
        $imagen->id_propiedad = $nombre;
         */
         return redirect()->route('admin.propiedades.index');
        

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
        
        $regiones = Region::lists('nombre', 'id');//aqui ingrso en primer lugar lo que quiero que muestre el select y luego el valur o lo que quiero que sea enviado por el select.
        $provincias = Provincia::lists('nombre', 'id');
        $comunas = Comuna::lists('nombre', 'id');
        $clientes = Cliente::lists('nombre_cliente', 'id_cliente');
        $categorias = Categoria::lists('nombre', 'id');
        $cantidades = Cantidad::lists('nombre', 'id');
        $propiedad = Propiedad::find($id);
        $publicaciones = Publicacion::lists('id');
        $numeros = $this->numeros();
        //dd($propiedad);

        return \View::make('admin.propiedades.edit', compact('regiones', 'provincias', 'comunas','clientes','categorias','cantidades','propiedad'))->with('propiedad', $propiedad)->with('publicaciones',$publicaciones)->with('numeros', $numeros);
      // return view('admin.propiedades.edit')->with('propiedad', $propiedad);
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
        //dd($request);

            $propiedad = Propiedad::find($id);
            //$propiedad->id_cliente = $request->cliente; 
            $propiedad->id_region = $request->region; 
            $propiedad->id_provincia = $request->provincia; 
            $propiedad->id_comuna = $request->comuna;
            $propiedad->direccion = $request->direccion;
            $propiedad->id_categoria = $request->categoria; 
            $propiedad->bagnos = $request->bagnos; 
            $propiedad->dormitorios = $request->dormitorios; 
            $propiedad->bodega = $request->bodega; 
            $propiedad->agua = $request->agua;
            $propiedad->luz = $request->luz;
            
            $propiedad->save();
            Flash::info('Se ha editado una propiedad exitosamente!!');
            
            /*
            $file = $request->file('imagen');
            $nombre = 'inmob_'. time(). '_'. $file->getClientOriginalExtension();
            $path = public_path().'/imagenes/propiedades/';
            $file->move($path,$nombre);
            */

       return redirect()->route('admin.propiedades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propiedad = Propiedad::find($id);
        $propiedad->delete();

        Flash::info('la propiedad de '.$propiedad->getCliente->nombre_cliente.' fué eliminado exitosamente!!');
        //Flash::success('El cliente'.$cliente->nombre.'ha sido borrado exitosamente!');
        return redirect()->route('admin.propiedades.index');
      //return view('admin.clientes.destroy');
    }

        public function info($id)
    {   

        $propiedad = Propiedad::find($id);
        $cliente = $propiedad->getCliente;
        $publicacion = $propiedad->getPublicacion;
        $imagen = $propiedad->getImagen;
        
        $numeros = $this->numeros();
        return view('admin.propiedades.info')->with('propiedad',$propiedad)->with('cliente',$cliente)->with('numeros',$numeros)->with('publicacion', $publicacion)->with('imagen', $imagen);


        //return view('admin.propiedades.index');
    }



}
