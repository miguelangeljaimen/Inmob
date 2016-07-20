@extends('admin/admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuarios</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>

                                @foreach($usuarios as $usuarios)
                                    <tr>
                                        <td>{{$usuario->id_user}}</td>
                                        <td>{{$cliente->nombres_user}}</td>
                                       <td>
                                 
                                     
                                        
                                        <a href="#" title="Editar cliente" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 

                                        <a href="{{route('admin.usuarios.destroy', $cliente->id_cliente)}}" onclick="return confirm('Al eliminar un cliente se eliminarán todas las propiedades asisgnadas a este')" title="Eliminar cliente" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                               
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div> 
                    {!!$usuarios->render();!!}
                </div>
            </div>
        </div>
    </div>
@endsection
