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
                                       <td>

                                       <a href="{{route('admin.propiedades.index', 'id='. $cliente->id_cliente)}}" title="Propiedades" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a> 
                                        
                                        <a href="{{route('admin.clientes.edit', $cliente->id_cliente)}}" title="Editar" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 

                                        <a href="{{route('admin.clientes.destroy', $cliente->id_cliente)}}" onclick="return confirm('Al eliminar un cliente se eliminarán todas las propiedades asisgnadas a este')" title="Eliminar" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>

                                         <a href="" title="Información" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a> 

                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                        <a href="{{route('admin.clientes.create')}}" title="Nuevo" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a> 
                    </div> 
                    {!!$clientes->render();!!}
                </div>
            </div>
        </div>
    </div>
@endsection