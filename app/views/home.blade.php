@extends('templates.maintemplate')

@section('title') ADP @stop

@section('slider')
	 @include('templates.__slider')
@stop

@section('contenido')	
	<div class="nosotros row no-margin">
		<img src="{{ asset('img/logo3.png') }}" alt="logo" class="col-md-2 img-responsive logo">
		<div class="slogan col-md-9">
			<p class="no-margin no-padding text-center" style="line-height:1em">
				“El Desarrollo no se reduce al siempre crecimiento economico, para ser autentico debe ser integral, es decir promover a toda la persona humana”				
			</p>
			<p class="no-margin no-padding text-right" style="font-family:rage; color:rgb(136,122,0)">Encíclica Populorum Progressio Ss Pablo VI</p>
		</div>
		<div class="clear"></div>
		<p class="container">Trabajamos para lograr mejoras duraderas en las condiciones de vida de las familias campesinas empobrecidas, a través de procesos participativos y el desarrollo de capacidades de hombres, mujeres y jóvenes, desde un enfoque de género, generacional y ambiental.</p>
		<p class="container">ADP es ampliamente reconocida por su liderazgo, capacidad de servicio y alto nivel de desempeño en la generación de capacidades locales, entre familias campesinas, para mejorar su calidad de vida, en un marco de Desarrollo a Escala Humana.</p>
	</div>	
	<hr class="container">
	<div class="historia container">
		<h2 class="subtitul text-center">Historia</h2>
		<p>Trabajamos para lograr mejoras duraderas en las condiciones de vida de las familias campesinas empobrecidas, a través de procesos participativos y el desarrollo de capacidades de hombres, mujeres y jóvenes, desde un enfoque de género,generacional y ambiental.</p>
		<p>ADP es ampliamente reconocida por su liderazgo, capacidad de servicio y alto nivel de desempeño en la generación de capacidades locales, entre familias campesinas, para mejorar su calidad de vida, en un marco de Desarrollo a Escala Humana.</p>
	</div>
	<hr class="container">
	<div class="quienes container">
		<h2 class="subtitul text-center">Quienes Somos</h2>
		<p>Asociación para el desarrollo de los Pueblos-ADP es una asociación civil nicaragüense, de inspiración cristiana, autónoma, apartidaria, de interés social y no lucrativa.</p>
	</div>
	<hr class="container">
	<div class="row container historia">
		<div class="col-md-6">
			<h2 class="subtitul text-center">Visión</h2>
			<p class="text-center">ADP es ampliamente reconocida por su liderazgo, capacidad de servicio y alto nivel de desempeño en la generación de capacidades locales, entre las familias campesinas, para mejorar su calidad de vida, en un marco de Desarrollo Rural a Escala Humana.</p>
		</div>
		<div class="col-md-6">
			<h2 class="subtitul text-center">Misión</h2>
			<p class="text-center">Trabajamos para lograr mejoras duraderas en las condiciones de vida de las familias campesinas empobrecidas, a través de procesos participativos y el desarrollo de capacidades de hombres, mujeres y jóvenes, desde un enfoque de género, generacional y ambiental.</p>
		</div>
	</div>
	<div class="pilares">
		<h2 class="pilares-titul">
			<p>NUESTROS PILARES</p>
		</h2>
		<div class="row no-margin iconos">
			<div class="col-md-6">
				<img src="{{ asset('img/organizacioncomuni1.png') }}" alt="organizacion" class="img-responsive" id="organizacion">				
			</div>
			<div class="col-md-6">
				<img src="{{ asset('img/reservahidri1.png') }}" alt="medioambiente" class="img-responsive" id="medioambiente">				
			</div>
			<div class="col-md-6">
				<a href="{{ URL::to('SaludComunitaria') }}"><img src="{{ asset('img/saludcom1.png') }}" alt="salud" class="img-responsive" id="salud"></a>				
			</div>			
			<div class="col-md-6">
				<a href="{{ URL::to('DesarrolloInstitucional') }}"><img src="{{ asset('img/desarrolloinst1.png') }}" alt="desarrollo" class="img-responsive" id="desarrollo"></a>				
			</div>
		</div>
	</div>
	<div class="imagen-home" data-stellar-background-ratio="0.4" data-stellar-vertical-offset="-300"></div>
	<div class="ubicacion">
		<div id="map" class="mapa"></div>
	</div>	
@stop

@section('js')	

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

	<script type="text/javascript">
		
		$('#organizacion').hover(function(){
			$(this).attr('src', "{{ asset('img/organizacioncomuni2.png') }}");
		},
		function(){
			$(this).attr('src', "{{ asset('img/organizacioncomuni1.png') }}");
		});

		$('#medioambiente').hover(function(){
			$(this).attr('src', "{{ asset('img/reservahidri1.png') }}");
		},
		function(){
			$(this).attr('src', "{{ asset('img/reservahidri2.png') }}");
		});

		$('#salud').hover(function(){
			$(this).attr('src', "{{ asset('img/saludcom1.png') }}");
		},
		function(){
			$(this).attr('src', "{{ asset('img/saludcom2.png') }}");
		});

		$('#desarrollo').hover(function(){
			$(this).attr('src', "{{ asset('img/desarrolloinst1.png') }}");
		},
		function(){
			$(this).attr('src', "{{ asset('img/desarrolloinst2.png') }}");
		});
	</script>

  	<script>
  		var myLatlng = new google.maps.LatLng(12.137221, -86.281380);

		var mapOptions = {
		  center: myLatlng,
      zoom: 15,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      scrollwheel: false,
		};

		var map = new google.maps.Map(document.getElementById("map"), mapOptions);

		 var lugar = new google.maps.Marker({
          position: new google.maps.LatLng(12.137221, -86.281380),
          map: map,
          animation:google.maps.Animation.BOUNCE
        });
  	</script>
@stop

