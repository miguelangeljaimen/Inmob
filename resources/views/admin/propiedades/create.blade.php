@extends('admin/admin')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Crear propiedad</div>
 

<script type="">
    $(document).ready(function(){ 
                        $("#habitacional").hide()
                        $("#rural").hide()
                    });
</script>


 <div class="panel-body">


{!! Form::open(['route' => 'admin.propiedades.store', 'method' => 'POST','files'=> true, 'class' => 'form']) !!}
    <div class="form-group">
        <label>Cliente</label>
        {!! Form::select ('cliente', $clientes, 0 , ['class'=>'form-control','style'=>'','id'=>'cliente', 'placeholder' =>'escoja un cliente'])!!}
    </div>

     @include('templates.partials.chile')
    
    <div class="form-group">
        <label>Categoria</label>
        {!! Form::select ('categoria', $categorias, 0 , ['class'=>'form-control','style'=>'','id'=>'categoria', 'placeholder' =>'escoja una categoria'])!!}
    </div>
    
    <div id="habitacional">
         <div class="form-group col-md-4">
            <label>Baños</label>
            {!! Form::select ('bagnos', $cantidades, 0 , ['class'=>'form-control','style'=>'', 'placeholder' =>'escoja una cantidad'])!!}
        </div> 
    
        <div class="form-group col-md-4">
            <label>Dormitorios</label>
            {!! Form::select ('dormitorios', $cantidades, 0 , ['class'=>'form-control','style'=>'', 'placeholder' =>'escoja una cantidad'])!!}
        </div>
     
        <div class="form-group col-md-4">
            <label>Bodega</label>
            {!! Form::select('bodega', array('SI' => 'SI', 'NO' => 'NO'), 'NO', array('class'=>'form-control','style'=>'')) !!}
        </div>

    </div>
   
     <div class="col-md-12" id="rural">
        <div class="form-group col-md-4">
            <label>Agua</label>
            {!! Form::select('agua', array('SI' => 'SI', 'NO' => 'NO'), 'NO', array('class'=>'form-control','style'=>'' )) !!}
        </div>
     
        <div class="form-group col-md-4">
            <label>Luz</label>
            {!! Form::select('luz', array('SI' => 'SI', 'NO' => 'NO'), 'NO', array('class'=>'form-control','style'=>'' )) !!}
        </div>
    </div>   
    
    <div class="form-group">
        {!!Form::label('imagen', 'Imagen')!!}
        {!!Form::file('imagen')!!}
    </div>
 
  
        
</div>
                
</div>

{!!Form::submit('crear publicacion', ['class'=>'btn btn-danger'])!!}
 {!! Form::close() !!}

</div>
</div>
</div>

@endsection

    