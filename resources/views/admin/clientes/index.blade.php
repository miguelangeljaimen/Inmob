@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Cliente</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Fono</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                @foreach($clientes as $cliente)
                                    <tr>
                                        <td>{{$cliente->id_cliente}}</td>
                                        <td>{{$cliente->nombre_cliente}}</td>
                                        <td>{{$cliente->email_cliente}}</td>
                                        <td>{{$cliente->fono_cliente}}</td>
                                       <td><a href="" class="btn btn-success btn-xs">Propiedades</a> <a href="" class="btn btn-danger btn-xs">Editar</a> <a href="{{route('admin.clientes.destroy', $cliente->nombre_cliente)}}" class="btn btn-danger btn-xs">Eliminar</a></td>
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                        {!!$clientes->render();!!}
                        <li><a href="{{route('admin.clientes.create')}}">Crear</a></li>
                        
                        <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection