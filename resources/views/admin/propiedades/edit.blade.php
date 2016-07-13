@extends('admin/admin')
 
@section('content')



<script type="">
    $(document).ready(function(){
         if ($("#categoria").val()>=1 && $("#categoria").val()<=4 ){
        $("#habitacional").show()
        $("#rural").hide()
    }
    else if ($("#categoria").val()==5 || $("#categoria").val()==6 ){
        $("#habitacional").show()
        $("#rural").show()
    }else{
        $("#habitacional").hide()
        $("#rural").show()
    }

    });
   

</script>
{{--dd($propiedad)--}}
<div class="container">
@include('templates.partials.validaciones')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar propiedad {{$propiedad->id_propiedad}}</div>
                    <div class="panel-body">

                        {!! Form::open(['route' => ['admin.propiedades.update', $propiedad], 'method' => 'PUT','files'=> true, 'class' => 'form']) !!}
                        <div class="form-group">
                            <label>Cliente</label>
                            {!! Form::select ('cliente', $clientes, $propiedad->id_cliente , ['class'=>'form-control','style'=>'','id'=>'cliente','disabled' => 'disabled', 'placeholder' =>'escoja un cliente'])!!}
                        </div>

                        <div class="form-group col-md-4">   
                            <label>Región</label>
                            {!! Form::select ('region', $regiones, $propiedad->id_region , ['class'=>'form-control','style'=>'','id'=>'region', 'placeholder' =>'escoja una region'])!!}
                        </div>
                        <div class="form-group col-md-4">   
                            <label>Provincia</label>
                            {!! Form::select ('provincia', $provincias, $propiedad->id_provincia, ['id'=>'provincia', 'class'=>'form-control'], ['placeholder'=>'seleccion'])!!}
                        </div>
                        <div class="form-group col-md-4">   
                            <label>Comuna</label>
                            {!! Form::select ('comuna',$comunas, $propiedad->id_comuna , ['id'=>'comuna', 'class'=>'form-control'], ['placeholder'=>'seleccion'])!!}
                        </div>
                        
                        <div class="form-group">
                            <label>Dirección</label>
                            {!! Form::text ('direccion', $propiedad->direccion, ['class'=>'form-control','style'=>'','id'=>'direccion', 'placeholder' =>'Calle, Numero, Torre, Dpto.'])!!}
                        </div>

                        <div class="form-group">
                            <label>Categoria</label>
                            {!! Form::select ('categoria', $categorias, $propiedad->id_categoria , ['class'=>'form-control','style'=>'','id'=>'categoria', 'placeholder' =>'escoja una cantidad'])!!}
                        </div>
                        
                        <div id="habitacional">
                             <div class="form-group col-md-4">
                                <label>Baños</label>
                                {!! Form::select ('bagnos', $cantidades, $propiedad->bagnos , ['class'=>'form-control','style'=>'', 'placeholder' =>'escoja una cantidad'])!!}
                            </div> 
                        
                            <div class="form-group col-md-4">
                                <label>Dormitorios</label>
                                {!! Form::select ('dormitorios', $cantidades, $propiedad->dormitorios , ['class'=>'form-control','style'=>'', 'placeholder' =>'escoja una cantidad'])!!}
                            </div>
                         
                            <div class="form-group col-md-4">
                                <label>Bodega</label>
                                {!! Form::select('bodega', array('SI' => 'SI', 'NO' => 'NO'), $propiedad->bodega, array('class'=>'form-control','style'=>'')) !!}
                            </div>

                        </div>
                       
                         <div class="col-md-12" id="rural">
                            <div class="form-group col-md-4">
                                <label>Agua</label>
                                {!! Form::select('agua', array('SI' => 'SI', 'NO' => 'NO'), $propiedad->agua, array('class'=>'form-control','style'=>'' )) !!}
                            </div>
                         
                            <div class="form-group col-md-4">
                                <label>Luz</label>
                                {!! Form::select('luz', array('SI' => 'SI', 'NO' => 'NO'), $propiedad->luz, array('class'=>'form-control','style'=>'' )) !!}
                            </div>
                        </div>   
                        
                        <div class="form-group">
                            {!!Form::label('imagen', 'Imagen')!!}
                            {!!Form::file('imagen')!!}
                        </div>
                     
                      
                            
                    </div>
                                    
                    </div>
                {!!Form::submit('editar propiedad', ['class'=>'btn btn-danger'])!!}                      
                {!! Form::close() !!}

            </div>

                

        </div>
    </div>
</div>

@endsection

    