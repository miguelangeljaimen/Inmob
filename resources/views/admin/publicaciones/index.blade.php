@extends('admin/admin')
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
                                <th>Propiedad</th>
                                <th>titulo</th>
                                <th>Descripcion</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>

                                @foreach($publicaciones as $publicacion)
                                    <tr>
                                        <td>{{$publicacion->id}}</td>
                                        <td>{{$publicacion->id_propiedad}}</td>
                                        <td>{{$publicacion->titulo}}</td>
                                        <td>{{$publicacion->descripcion}}</td>
                                       <td>
                                 
                                       <a href="" title="Ver propiedades" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a> 
                                        
                                        <a href="{{route('admin.publicaciones.edit', $publicacion->id)}}" title="Editar cliente" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 

                                        <a href="" onclick="return confirm('Al eliminar un cliente se eliminarán todas las propiedades asisgnadas a este')" title="Eliminar cliente" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>

                                         <a href="" title="Ver información" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a> 
                               
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                        <a href="" title="Nuevo" class="btn  btn-md"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a> 
                    </div> 
                    {!!$publicaciones->render();!!}
                </div>
            </div>
        </div>
    </div>
@endsection