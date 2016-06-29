@extends('app')
 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Busqueda</div>
 
				<div class="panel-body">
					{!! Form::open() !!}

                        <div class="form-group">
	                        <div class="col-md-3">	
	                            <label>Tipo</label>
	                            {!! Form::select('size', array('1' => 'venta', '2' => 'Arriendo'), null, array('class'=>'form-control','style'=>'' )) !!}
	                        </div>

	                         @include('templates.partials.chile')

                        </div>
                      
                    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Resultados</div>
 
				<div class="panel-body">
					<div class="col-md-4">
						<div class="col-md-6">
							{!! Html::image('assets/img/img.gif','alt',array( 'width' => 100 )) !!}
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-md-6">
							{!! Html::image('assets/img/img.gif','alt',array( 'width' => 100 )) !!}
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-md-6">
							{!! Html::image('assets/img/img.gif','alt',array( 'width' => 100 )) !!}
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-md-6">
							{!! Html::image('assets/img/img.gif','alt',array( 'width' => 100 )) !!}
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection