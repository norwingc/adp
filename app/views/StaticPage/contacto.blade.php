@extends('templates.maintemplate')

@section('title') ADP @stop

@section('css')
	<style type="text/css">	
		.infocontacto{
			font-size: 1.5em;			
		}	
		.infocontacto span{			
			color: #35988e;			
		}
	</style>
@stop

@section('slider')
<div class="camera_wrap">
    <div data-src="{{asset('img/slider/index/1.jpg')}}"></div>
    <div data-src="{{asset('img/slider/index/2.jpg')}}"></div>
    <div data-src="{{asset('img/slider/index/3.jpg')}}"></div>   
    <div data-src="{{asset('img/slider/index/4.jpg')}}"></div>       
</div>
<div class="img1">
	<h1 class="titul no-margin no-padding">Asociación para el Desarrollo de los Pueblos</h1>	
</div>
@stop

@section('contenido')
<div class="contacto">
	<div class="informacion">
		<div class="container">
			<div class="col-md-3"><img src="{{ asset('img/logo.png') }}" alt="Desarrollo Institucional" class="img-responsive img-titul"></div>
			<div class="col-md-9"><h2 class="subtitul" style="margin-top:3em">Asociación para el Desarrollo de los Pueblos (ADP )</h2></div>
		</div>

		<div class="container infocontacto">
			<div class="col-md-6" style="margin-top:3em">
				<p><span>Direcci&oacute;n:</span>C.S.T. 5 Cuadras al Sur 1 1/2 Cuadra al Oeste, Bolonia, 4627, Managua</p>
				<p><span>Teléfonos:</span> 22281360 - 22283005</p>
				<p><span>E-mail:</span>adp@adp.org.ni</p>
			</div>
			<div class="col-md-6">
				<div class="ubicacion">
					<div id="map" class="mapa"></div>
				</div>	
			</div>
		</div>

		<div class="titulother" style="font-size:2em; padding-left:2em">Contáctenos</div>	
		
		<div class="container">
			{{ Form::open(array('url' => '#', 'class' => 'form-horizontal')) }}
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 col-sm-offset-2 control-label">Nombre y Apellidos</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" placeholder="Nombre y Apellidos" required>
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 col-sm-offset-2 control-label">Razón Social</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" placeholder="Razón Social" required>
					</div>
				</div>
				

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 col-sm-offset-2 control-label">Correo Electrónico</label>
					<div class="col-sm-7">
						<input type="email" class="form-control" placeholder="Correo Electrónico" required>
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 col-sm-offset-2 control-label">Teléfono</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" placeholder="Teléfono" required>
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 col-sm-offset-2 control-label">Escriba su Mensaje</label>
					<div class="col-sm-7">
						<textarea class="form-control" placeholder="Escriba su Mensaje" required></textarea>
					</div>
				</div>

				<div class="text-center col-md-offset-2">
					<button type="submit" class="btn btn-info btn-lg">Enviar</button>
				</div>
			{{ Form::close() }}
			</div>
	</div>
</div>
@stop


@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAORLGtHmLzUlvBz1FspuJpiO3oo9lLdsc"></script>
<script>
	var myLatlng = new google.maps.LatLng(12.141647016, -86.2835516131);

	var mapOptions = {
		center: myLatlng,
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
	};

	var map = new google.maps.Map(document.getElementById("map"), mapOptions);

	var lugar = new google.maps.Marker({
		position: new google.maps.LatLng(12.141647016, -86.2835516131),
		map: map,
		animation:google.maps.Animation.BOUNCE
	});
</script>
@stop