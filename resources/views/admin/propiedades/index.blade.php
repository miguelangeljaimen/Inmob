@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Propiedaes</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Cliente</th>
                                <th>categoria</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                @foreach($propiedades as $propiedad)
                                    <tr>
                                        <td>{{$propiedad->id_propiedad}}</td>
                                        <td>{{$propiedad->id_cliente}}</td>
                                        <td>{{$propiedad->id_categoria}}</td>
                                        <td><a href="" class="btn btn-success btn-xs">Publicar</a> <a href="" class="btn btn-danger btn-xs">Editar</a> <a href="" class="btn btn-danger btn-xs">Eliminar</a></td>
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                        {!!$propiedades->render();!!}
                        <li><a href="{{route('admin.propiedades.create')}}">Crear</a></li>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection