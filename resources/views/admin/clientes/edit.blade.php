@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar cliente {{$cliente->nombre_cliente}}</div>
                    <div class="panel-body">

                        {!! Form::open(['route' => ['admin.clientes.update', $cliente], 'method' => 'PUT', 'class' => 'form']) !!}
                            <div class="form-group">
                                <label>Nombre</label>
                                {!! Form::text('nombre', $cliente->nombre_cliente, ['class'=> 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label>Rut</label>
                                {!! Form::text('rut', $cliente->rut_cliente, ['class'=> 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                {!! Form::email('email', $cliente->email_cliente, ['class'=> 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label>Fono</label>
                                {!! Form::number('fono', $cliente->fono_cliente, ['class'=> 'form-control']) !!}
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