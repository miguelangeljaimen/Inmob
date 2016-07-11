@extends('admin/admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear cliente</div>
                    <div class="panel-body">
                    {{--dd(Auth::user()->id_user)--}}
                        {!! Form::open(['route' => 'admin.publicaciones.store', 'method' => 'POST', 'class' => 'form']) !!}  
                            <div class="form-group">
                               {!! Form::hidden('propiedad', $propiedad) !!}
                            </div>
                            <div class="form-group">
                               {!! Form::hidden('user', Auth::user()->id_user) !!}
                            </div>

                            <label>Tipo</label>
                                {!! Form::select('tipo', array('venta' => 'Venta', 'arriendo' => 'Arriendo'), 'arriendo', array('class'=>'form-control','style'=>'' )) !!}
                            </div>  

                            <div class="form-group">
                                <label>Titulo</label>
                                {!! Form::text('titulo', null, ['class'=> 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label>Descripción</label>
                                {!! Form::textarea('descripcion', '', ['class'=> 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label>Valor CLP</label>
                                {!! Form::text('valor_cl', '', ['class'=> 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label>Valor UF</label>
                                {!! Form::text('valor_uf', '', ['class'=> 'form-control']) !!}
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