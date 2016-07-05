@extends('app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Crear propiedad</div>
 
                <div class="panel-body">

                    {!! Form::open(['route' => ['admin.propiedades.update', $propiedad], 'method' => 'PUT','files'=> true, 'class' => 'form']) !!}

                        <div class="form-group">
                            
                            <div class="col-md-12"> 
                             <label>Cliente</label>
                                {!! Form::select ('cliente', $clientes, $propiedad->id_cliente , $propiedad->id_cliente,['class'=>'form-control','style'=>'','id'=>'cliente', 'placeholder' =>'escoja un cliente'])!!}
                            </div>
                            @include('templates.partials.chile')
                            <div class="col-md-8"> 
                                <label>Categoria</label>
                                {!! Form::select ('categoria', $categorias, $propiedad->id_categoria , ['class'=>'form-control','style'=>'','id'=>'cliente', 'placeholder' =>'escoja una categoria'])!!}
                            </div>  
                            <div class="col-md-6"> 
                                <label>Baños</label>
                                {!! Form::select ('bagnos', $cantidades, $propiedad->bagnos , ['class'=>'form-control','style'=>'','id'=>'cliente', 'placeholder' =>'escoja una categoria'])!!}
                            </div>  
                            <div class="col-md-6"> 
                                <label>Dormitorios</label>
                                {!! Form::select ('dormitorios', $cantidades, $propiedad->dormitorios , ['class'=>'form-control','style'=>'','id'=>'cliente', 'placeholder' =>'escoja una categoria'])!!}
                            </div>  
                            <div class="col-md-4"> 
                            <label>Bodega</label>
                                {!! Form::select('bodega', array('1' => 'SI', '2' => 'NO'), $propiedad->bodega, array('class'=>'form-control','style'=>'' )) !!}
                            </div>  
                            <div class="col-md-4"> 
                            <label>Agua</label>
                                {!! Form::select('agua', array('1' => 'SI', '2' => 'NO'), $propiedad->agua, array('class'=>'form-control','style'=>'' )) !!}
                            </div>  
                            <div class="col-md-4"> 
                            <label>Luz</label>
                                {!! Form::select('luz', array('1' => 'SI', '2' => 'NO'), $propiedad->luz, array('class'=>'form-control','style'=>'' )) !!}
                            </div>  

                            <div class="col-md-4">
                                {!!Form::label('imagen', 'Imagen')!!}
                                {!!Form::file('imagen')!!}
                            </div>
                        </div>
                            
                        <div class="form-group col-md-4">
                            {!!Form::submit('editar propiedad', ['class'=>'btn btn-danger'])!!}
                        </div>
                       
                      
                    {!! Form::close() !!}
                </div>
            </div>



        </div>
    </div>
</div>

@endsection

    