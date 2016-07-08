@extends('admin/admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear cliente</div>
                    <div class="panel-body">
                       
                        {!! Form::open(['route' => 'admin.clientes.store', 'method' => 'POST', 'class' => 'form']) !!}
                            <div class="form-group">
                                <label>Titulo</label>
                                {!! Form::text('titulo', null, ['class'=> 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label>Descripción</label>
                                {!! Form::textarea('descripcion', '', ['class'=> 'form-control']) !!}
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