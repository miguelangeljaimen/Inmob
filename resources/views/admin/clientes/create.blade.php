@extends('admin/admin')
@section('content')
    <div class="container">

            @include('templates.partials.validaciones')

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear cliente</div>
                    <div class="panel-body">
                       
                        {!! Form::open(['route' => 'admin.clientes.store', 'method' => 'POST', 'class' => 'form']) !!}
                            <div class="form-group">
                                <label>Nombre</label>
                                {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label>Rut</label>
                                {!! Form::text('rut_cliente', '', ['class'=> 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                {!! Form::email('email_cliente', '', ['class'=> 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label>Fono</label>
                                {!! Form::text('fono', '', ['class'=> 'form-control']) !!}
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