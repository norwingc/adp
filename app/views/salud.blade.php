@extends('templates.maintemplate')

@section('title') ADP | Salud Comunitaria Preventiva @stop

@section('slider')
	 @include('templates.__slider')
@stop

@section('contenido')	
<div class="salud">
	<div class="seccion-color"></div>
	<div class="informacion">
		<div class="container">
			<div class="col-md-2"><img src="{{ asset('img/salud.png') }}" alt="Salud Comunitaria Preventiva" class="img-responsive img-titul"></div>
			<div class="col-md-6"><h2 class="subtitul">Salud Comunitaria Preventiva</h2></div>
		</div>
	</div>
</div>

@stop