@extends('admin/admin')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar propiedad {{$propiedad->id_propiedad}}</div>
 
                <div class="panel-body">

                    {!! Form::open(['route' => ['admin.propiedades.update', $propiedad], 'method' => 'PUT','files'=> true, 'class' => 'form']) !!}

                        <div class="form-group">
                            
                            <div class="col-md-12"> 
                             <label>Cliente</label>
                                {!! Form::select ('cliente', $clientes, $propiedad->id_cliente,['class'=>'form-control','disabled' => 'disabled','style'=>'','id'=>'cliente', 'placeholder' =>'escoja un cliente'])!!}

                                
                            </div>
                            
                            <div class="col-md-3">  
                                <label>Región</label>
                                    {!! Form::select ('region', $regiones, $propiedad->id_region , ['class'=>'form-control','style'=>'','id'=>'region', 'placeholder' =>'escoja una region'])!!}
                            </div>

                             <div class="col-md-3">  
                                <label>Provincia</label>
                                    {!! Form::select ('provincia', $provincias, $propiedad->id_provincia , ['class'=>'form-control','style'=>'','id'=>'provincia', 'placeholder' =>'escoja una provincia'])!!}
                            </div>

                             <div class="col-md-3">  
                                <label>Comuna</label>
                                    {!! Form::select ('comuna', $comunas, $propiedad->id_comuna , ['class'=>'form-control','style'=>'','id'=>'comuna', 'placeholder' =>'escoja una comuna'])!!}
                            </div>

                            <div class="col-md-8"> 
                                <label>Categoria</label>
                                {!! Form::select ('categoria', $categorias, $propiedad->id_categoria , ['class'=>'form-control','style'=>'','id'=>'cliente', 'placeholder' =>'escoja una categoria'])!!}
                            </div>

                            {{--<div class="col-md-3">  
                                <label>Provincia</label>
                                    {!! Form::select ('provincia', ['placeholder'=>'seleccion'], ['id'=>'provincia', 'class'=>'form-control'])!!}
                            </div>
                            <div class="col-md-3">  
                                <label>Comuna</label>
                                    {!! Form::select ('comuna', ['placeholder'=>'seleccion'], $propiedad->id_comuna, ['id'=>'comuna', 'class'=>'form-control'])!!}
                                </div>


                            <div class="col-md-8"> 
                                <label>Categoria</label>
                                {!! Form::select ('categoria', $categorias, $propiedad->id_categoria , ['class'=>'form-control','style'=>'','id'=>'cliente', 'placeholder' =>'escoja una categoria'])!!}
                            </div>--}}  
                            <div class="col-md-6"> 
                                <label>Baños</label>
                                {!! Form::select ('bagnos', $cantidades, $propiedad->bagnos , ['class'=>'form-control','style'=>'','id'=>'cliente', 'placeholder' =>'escoja una cantidad'])!!}
                            </div>  

                            <div class="col-md-6"> 
                                <label>Dormitorios</label>
                                {!! Form::select ('dormitorios', $cantidades, $propiedad->dormitorios , ['class'=>'form-control','style'=>'','id'=>'cliente', 'placeholder' =>'escoja una cantidad'])!!}
                            </div> 

                            <div class="col-md-4"> 
                            <label>Bodega</label>
                                {!! Form::select('bodega', array('SI' => 'SI', 'NO' => 'NO'), $propiedad->bodega, array('class'=>'form-control','style'=>'' )) !!}
                            </div>  

                            <div class="col-md-4"> 
                            <label>Agua</label>
                                {!! Form::select('agua', array('SI' => 'SI', 'NO' => 'NO'), $propiedad->agua, array('class'=>'form-control','style'=>'' )) !!}
                            </div>  

                            <div class="col-md-4"> 
                            <label>Luz</label>
                                {!! Form::select('luz', array('SI' => 'SI', 'NO' => 'NO'), $propiedad->luz, array('class'=>'form-control','style'=>'' )) !!}
                            </div>  

                            <div class="col-md-4">
                                {!!Form::label('imagen', 'Imagen')!!}
                                {!!Form::file('imagen')!!}
                            </div>
                        </div>
                       
                </div>
            </div>
<div class="form-group col-md-4">
                            {!!Form::submit('editar propiedad', ['class'=>'btn btn-danger'])!!}
                        </div>
                      
                    {!! Form::close() !!}
{{--dd($propiedad)--}}

        </div>
    </div>
</div>

@endsection

    