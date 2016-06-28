@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear cliente</div>
                    <div class="panel-body">
                        <h1>Clientes</h1>
                        <li><a href="{{route('admin.clientes.create')}}">Crear</a></li>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection