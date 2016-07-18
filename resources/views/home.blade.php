



@extends('app')



 
@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Busqueda</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>

            <div class="col-md-9">

               {{-- <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">


                               
                                <div class="item-active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            @foreach($publicaciones as $publicacion)
                            	<div class="item">
                                   <img src="{{'/imagenes/propiedades/'.$publicacion->getPropiedad->getImagen->nombre}}" alt="">
                                </div>
                            @endforeach
                                
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div> 

                </div> --}}

                @foreach($publicaciones as $publicacion)



                {{--//////////////////////////////////////////////////////////////--}}
                <div class="col-sm-4 col-lg-4 col-md-4">
                        
                        <div class="thumbnail">

                        <div class="imagen">
                        	<img src="{{'/imagenes/propiedades/'.$publicacion->getPropiedad->getImagen->nombre}}" alt="" class="img-thumbnail img-responsive">
                        </div>
                            

                        {{--HABITACIONAL--}}

                            @if($publicacion->getPropiedad->id_categoria >= 1 && $publicacion->getPropiedad->id_categoria <= 4)
                            	<div class="caption">
                            @if($publicacion->tipo == "venta")
                                <h4 class="pull-right">UF_{{$publicacion->valor_uf}}</h4>
                            @else
                            	<h4 class="pull-right">$_{{$publicacion->valor_cl}}</h4>
                            @endif
                            	<h4 class="">{{$publicacion->tipo}}</h4>
                                <h4><a href="#">{{$publicacion->titulo}}</a>
                                </h4>
                        <table class="table table-striped table-responsive">
                          	<tbody>

                                <tr>
                                  <th scope="row">Dormitorios</th>
                                  <td>{{$publicacion->getPropiedad->getDormitorios->nombre}}</td>
                                </tr>

                                 <tr>
                                  <th scope="row">Baños</th>
                                  <td>{{$publicacion->getPropiedad->getBagnos->nombre}}</td>
                                </tr>
                                
                                <tr>
                                  <th scope="row">Bodega</th>
                                  <td>{{$publicacion->getPropiedad->bodega}}</td>
                                </tr>
                          	</tbody>
                        </table>
                                
                            </div>

                        {{--COMERCIAL--}}

                        @elseif($publicacion->getPropiedad->id_categoria >= 5 && $publicacion->getPropiedad->id_categoria <= 6)
                            <div class="caption">
                            @if($publicacion->tipo == "venta")
                                <h4 class="pull-right">UF_{{$publicacion->valor_uf}}</h4>
                            @else
                            	<h4 class="pull-right">$_{{$publicacion->valor_cl}}</h4>
                            @endif
                            
                                <h4><a href="#">{{$publicacion->titulo}}</a>
                                </h4>
                                <table class="table table-striped table-responsive">
                          <tbody>

                                
                                <tr>
                                  <th scope="row">Baños</th>
                                  <td>{{$publicacion->getPropiedad->getBagnos->nombre}}</td>
                                </tr>

                               
                                <tr>
                                  <th scope="row">Dormitorios</th>
                                  <td>{{$publicacion->getPropiedad->getDormitorios->nombre}}</td>
                                </tr>
                                
                                <tr>
                                  <th scope="row">Bodega</th>
                                  <td>{{$publicacion->getPropiedad->bodega}}</td>
                                </tr>
                               
                                <tr>
                                  <th scope="row">Agua</th>
                                  <td>{{$publicacion->getPropiedad->agua}}</td>
                                </tr>
                               
                                <tr>
                                  <th scope="row">Luz</th>
                                  <td>{{$publicacion->getPropiedad->luz}}</td>
                                </tr>
                               
                                  
                          </tbody>
                        </table>
                                <p>{{$publicacion->descripcion}} .</p>
                            </div>
                        

                        {{--RURAL--}}    
                        @else
                            	<div class="caption">
                            @if($publicacion->tipo == "venta")
                                <h4 class="pull-right">UF_{{$publicacion->valor_uf}}</h4>
                            @else
                            	<h4 class="pull-right">$_{{$publicacion->valor_cl}}</h4>
                            @endif
                            <h4>{{$publicacion->getPropiedad->id_categoria}}</h4>
                                <h4><a href="#">{{$publicacion->titulo}}</a>
                                </h4>
                                <table class="table table-striped table-responsive">
                          <tbody>

                                <tr>
                                  <th scope="row">Agua</th>
                                  <td>{{$publicacion->getPropiedad->agua}}</td>
                                </tr>
                               
                                <tr>
                                  <th scope="row">Luz</th>
                                  <td>{{$publicacion->getPropiedad->luz}}</td>
                                </tr>
                               
                                  
                          </tbody>
                        </table>
                                <p>{{$publicacion->descripcion}} .</p>
                            </div>
                            @endif

                                                        <div class="ratings">
                                <p class="pull-right">postulaciones</p>
                                <p>
                                    <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                {{--//////////////////////////////////////////////////////////////--}}

                 


                @endforeach 

               

            </div>

        </div>

    </div>
    <!-- /.container -->
@endsection