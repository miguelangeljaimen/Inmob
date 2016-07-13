@extends('admin/admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Propiedad</div>
                    <div class="panel-body">

                        <table class="table table-striped table-responsive">
                          <tbody>

                                <tr>
                                  <th scope="row">ID</th>
                                  <td>{{$propiedad->id_propiedad}}</td>
                                </tr>

                                 <tr>
                                  <th scope="row">Categoria</th>
                                  <td>{{$propiedad->getCategoria->nombre}}</td>
                                </tr>
                              
                                <tr>
                                  <th scope="row">Dirección</th>
                                  <td>{{$propiedad->direccion.', '.$propiedad->getComuna->nombre.', '.$propiedad->getRegion->nombre}}</td>
                                </tr>

                                <tr>
                                  <th scope="row">Baños</th>
                                  <td>{{$propiedad->getBagnos->nombre}}</td>
                                </tr>

                               
                                <tr>
                                  <th scope="row">Dormitorios</th>
                                  <td>{{$propiedad->getDormitorios->nombre}}</td>
                                </tr>
                                
                                <tr>
                                  <th scope="row">Bodega</th>
                                  <td>{{$propiedad->bodega}}</td>
                                </tr>
                               
                                <tr>
                                  <th scope="row">Agua</th>
                                  <td>{{$propiedad->agua}}</td>
                                </tr>
                               
                                <tr>
                                  <th scope="row">Luz</th>
                                  <td>{{$propiedad->luz}}</td>
                                </tr>
                               
                                  
                          </tbody>
                        </table>
                                @if($propiedad->estado == "privado")
                                               <a href="{{route('admin.publicaciones.create',  $propiedad->id_propiedad)}}" title="publicar" class="btn btn-Warning btn-sm"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span></a>
                                               @else
                                                  <a href="" title="ver publicación" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>  
                                               @endif
                                <a href="{{route('admin.propiedades.edit', $propiedad->id_propiedad)}}"  title="Editar" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 

                                <a href="{{route('admin.propiedades.destroy', $propiedad->id_propiedad)}}" onclick="return confirm('Se eliminara esta propiedad')" title="Eliminar" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                    </div> 
                    
                </div>
            </div>

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
                                  
                    </div> 
                    
                </div>
            </div>
           
    </div>
@endsection