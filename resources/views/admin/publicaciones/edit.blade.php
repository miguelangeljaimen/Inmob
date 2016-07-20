@extends('admin/admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                {{--dd($publicacion)--}}
                    <div class="panel-heading">Editar publicacion {{$publicacion->titulo}}</div>
                    <div class="panel-body">
                    {{--dd(Auth::user()->id_user)--}}
                        {!! Form::open(['route' => ['admin.publicaciones.update', $publicacion], 'method' => 'PUT', 'class' => 'form']) !!} 

                            <div class="form-group">
                            {!! Form::hidden('user', Auth::user()->id_user) !!}
                            </div>

                            <div class="form-group">
                               {!! Form::hidden('user', Auth::user()->id_user) !!}
                            </div>
                            <div class="form-group">
                                <label>Titulo</label>
                                {!! Form::text('titulo', $publicacion->titulo, ['class'=> 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label>Descripción</label>
                                {!! Form::textarea('descripcion', $publicacion->descripcion, ['class'=> 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label>Valor CLP</label>
                                {!! Form::text('valor_cl', $publicacion->valor_cl, ['class'=> 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label>Valor UF</label>
                                {!! Form::text('valor_uf', $publicacion->valor_uf, ['class'=> 'form-control']) !!}
                            </div>

                            <div class="form-group">
                            <label>Visibilidad</label>
                            {!! Form::select('estado', array('publico' => 'Publica', 'privado' => 'Privada'), '', array('class'=>'form-control','id'=>'tipo', 'placeholder' =>'Visibilidad' )) !!}    
                            </div>

                            <div>                            
                                {!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection