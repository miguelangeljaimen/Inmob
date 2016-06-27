@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Cantidad</div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'propiedades.cantidades.store', 'method' => 'POST', 'class' => 'form']) !!}
                            <div class="form-group">
                                <label>Nombre</label>
                                {!! Form::text('nombre', '', ['class'=> 'form-control']) !!}
                            </div>
                            <div>                            
                                {!! Form::submit('cantidad',['class' => 'btn btn-primary']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection