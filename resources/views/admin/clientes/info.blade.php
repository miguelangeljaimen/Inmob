@extends('admin/admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Cliente</div>
                    <div class="panel-body">

                        <table class="table table-striped table-responsive">
                          <tbody>

                                <tr>
                                  <th scope="row">ID</th>
                                  <td>{{$cliente->id_cliente}}</td>
                                </tr>
                              
                                <tr>
                                  <th scope="row">Nombre</th>
                                  <td>{{$cliente->nombre_cliente}}</td>
                                </tr>
                              
                                <tr>
                                  <th scope="row">Rut</th>
                                  <td>{{$cliente->rut_cliente}}</td>
                                </tr>
                              
                                <tr>
                                  <th scope="row">Correo</th>
                                  <td>{{$cliente->email_cliente}}</td>
                                </tr>

                                <tr>
                                  <th scope="row">Fono</th>
                                  <td>{{$cliente->fono_cliente}}</td>
                                </tr>
                                  
                          </tbody>
                        </table>
                                  <a href="{{route('admin.clientes.edit', $cliente->id_cliente)}}" title="Editar cliente" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 

                                  <a href="{{route('admin.clientes.destroy', $cliente->id_cliente)}}" onclick="return confirm('Al eliminar un cliente se eliminarán todas las propiedades asisgnadas a este')" title="Eliminar cliente" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                    </div> 
                    
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Propiedades</div>
                    <div class="panel-body">



                       <table class="table table-striped table-responsive">
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

                                                <a href="{{route('admin.clientes.info', 'id='. $cliente->id_cliente)}}"  title="Información" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a> 

                                            </td>

                                            
                                        </tr>
                                    @endforeach 
                            </tbody>
                        </table>
                         <a href="{{route('admin.propiedades.create')}}" title="Nuevo" class="btn  btn-md"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a> 
                        {{--</table>--}}
                    </div>
                     {!!$propiedades->render();!!}

                </div>
            </div>
        </div>
    </div>
@endsection