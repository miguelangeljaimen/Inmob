@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Propiedaes </div>
                    
                    <!--Formulario buscar propiedades

                    {!! Form::open(['route' => 'admin.propiedades.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left']) !!}
                            <div class="form-group">
                                {!! Form::text('id', null, ['class'=> 'form-control']) !!}
                            </div>
                                                   
                                {!! Form::submit('buscar',['class' => 'btn btn-default']) !!}
                            
                        {!! Form::close() !!}
                    Fin formulario buscar propiedades-->
                    
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
                                            <td>{{$propiedad->getCliente->nombre_cliente}}</td>
                                            <td>{{$propiedad->getCategoria->nombre}}</td>
                                            <td>
                                            
                                                <a href="" title="Publicar" class="btn btn-Warning btn-sm"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span></a> 
                                            
                                                <a href="{{route('admin.propiedades.edit', $propiedad->id_propiedad)}}"  title="Editar" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 

                                                <a href="{{route('admin.propiedades.destroy', $propiedad->id_propiedad)}}" onclick="return confirm('Se eliminara esta propiedad')" title="Eliminar" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>

                                                <a href="" title="Información" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a> 

                                            </td>

                                            
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