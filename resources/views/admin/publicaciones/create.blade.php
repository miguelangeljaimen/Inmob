@extends('admin/admin')
@section('content')


<script type="">
    $(document).ready(function(){ 
        //alert("prueba");
                        $("#valor_cl").hide()
                        $("#valor_uf").hide()
                    });
</script>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Publicando propiedad con ID:{{$propiedad}}</div>


                    <div class="panel-body">
                        {{--dd(Auth::user()->id_user)--}}
                        {!! Form::open(['route' => 'admin.publicaciones.store', 'method' => 'POST','files'=> true, 'class' => 'form']) !!}  
                            
                        <div class="form-group">
                            {!! Form::hidden('propiedad', $propiedad) !!}
                        </div>
                            
                        <div class="form-group">
                            {!! Form::hidden('user', Auth::user()->id_user) !!}
                        </div>

                        <div class="form-group">
                            <label>Tipo</label>
                            {!! Form::select('tipo', array('venta' => 'Venta', 'arriendo' => 'Arriendo'), '', array('class'=>'form-control','id'=>'tipo', 'placeholder' =>'Tipo de publicacion' )) !!}    
                        </div>

                        <div class="form-group">
                            <label>Titulo</label>
                            {!! Form::text('titulo', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                             <label>Descripción</label>
                            {!! Form::textarea('descripcion', '', ['class'=> 'form-control']) !!}
                        </div>
                
                        <div class="form-group" id="valor_cl">
                            <label>Valor CLP</label>
                            {!! Form::text('valor_cl', '', ['class'=> 'form-control, col-md-4']) !!}
                        </div>

                        <div class="form-group" id="valor_uf">
                            <label>Valor UF</label>
                            {!! Form::text('valor_uf', '', ['class'=> 'form-control, col-md-4']) !!}
                        </div>

                        <div class="form-group">
                            <label>Visibilidad</label>
                            {!! Form::select('estado', array('publico' => 'Publica', 'privado' => 'Privada'), '', array('class'=>'form-control','id'=>'tipo', 'placeholder' =>'Visibilidad' )) !!}    
                        </div>

                        <div class="form-group">
                            {!!Form::label('imagen', 'Imagen')!!}
                            {!!Form::file('imagen')!!}
                        </div>
                         

                        <div>                            
                            {!! Form::submit('Crear',['class' => 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}

     
</div>



   
                    </div> 
                </div>
            </div>
        </div>

@endsection