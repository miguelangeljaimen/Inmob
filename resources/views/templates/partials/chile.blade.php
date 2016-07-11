<div class="form-group col-md-4">	
	<label>Región</label>
	    {!! Form::select ('region', $regiones, 0 , ['class'=>'form-control','style'=>'','id'=>'region', 'placeholder' =>'escoja una region'])!!}
</div>
<div class="form-group col-md-4">	
	<label>Provincia</label>
	    {!! Form::select ('provincia', ['placeholder'=>'seleccion'], null, ['id'=>'provincia', 'class'=>'form-control'])!!}
</div>
<div class="form-group col-md-4">	
	<label>Comuna</label>
	    {!! Form::select ('comuna', ['placeholder'=>'seleccion'], null, ['id'=>'comuna', 'class'=>'form-control'])!!}
	</div>