@extends('admin/admin')
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
                                            
                                               @if($propiedad->estado == "privado")
                                               <a href="" title="publicar" class="btn btn-Warning btn-sm"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span></a>
                                               @else
                                                  <a href="" title="hacer privado" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>  
                                               @endif
                                              
                                            
                                                <a href="{{route('admin.propiedades.edit', $propiedad->id_propiedad)}}"  title="Editar" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 

                                                <a href="{{route('admin.propiedades.destroy', $propiedad->id_propiedad)}}" onclick="return confirm('Se eliminara esta propiedad')" title="Eliminar" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>

                                                <a href="" title="Información" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a> 

                                            </td>

                                            
                                        </tr>
                                    @endforeach 
                            </tbody>
                        </table>
                        <a href="{{route('admin.propiedades.create')}}" title="Nuevo" class="btn  btn-md"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a> 
                    </div> 
                      {!!$propiedades->render();!!}
                </div>
            </div>
        </div>
    </div>
@endsection