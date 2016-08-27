@extends('templates.maintemplate')

@section('title') ADP @stop


@section('slider')
<div class="camera_wrap">
	@foreach(SliderIndex::all() as $value)
	    <div data-src="{{asset('img/slider/'.$value->path)}}"></div>	    
    @endforeach
</div>
<div class="img1">
	<h1 class="titul no-margin no-padding">Asociación para el Desarrollo de los Pueblos</h1>	
</div>
@stop

@section('contenido')	
	<div class="nosotros row no-margin">
		<img src="{{ asset('img/logo.png') }}" alt="logo" class="col-md-2 img-responsive logo">
		<div class="slogan col-md-9">
			<p class="text-center" style="line-height:1em">
				“El Desarrollo no se reduce al siempre crecimiento económico, para ser auténtico debe ser integral, es decir promover a toda la persona humana”				
			</p>
			<p class="text-right" style="font-family:rage; color:rgb(136,122,0); margin-top:1em">Encíclica Populorum Progressio Ss Pablo VI</p>
		</div>
		<div class="clear"></div>
	
	</div>	
	<hr class="container">
	<div class="historia container">
		<h2 class="subtitul text-center" style="margin-bottom:1em">Historia</h2>
		<p>A lo largo de sus 38 años de vida, la ADP ha pasado por grandes fases o etapas en su historia, que van desde su surgimiento, estrechamente vinculado en sus inicios con las acciones de la Conferencia de Religiosos de Nicaragua, hasta alcanzar su propia autonomía en 1982.</p>		
		<p>Como elemento recurrente en el historial de ADP, se denota un marcado cambio de enfoque de sus acciones, según las circunstancias históricas del país, pasando, entre 1983 y 1994, de posturas eminentemente asistenciales, hasta un enfoque de desarrollo comunitario y local que se orientó a la autogestión y sostenibilidad de las mismas.</p>
		<p>De 1994 a 2004, el desarrollo social, vinculado a la autonomía, y la sostenibilidad local fueron los ejes de trabajo en las comunidades atendidas. A partir del 2005 y teniendo como referente su Primer Plan Estratégico institucional, la ADP continuó su labor con principios, valores y estrategias generales en un marco de Desarrollo a Escala Humana.</p>
		<p>En la actualidad ADP está abocada a la ejecución de su Plan Estratégico Institucional para el período 2014-2018.</p>
	</div>
	<hr class="container">
	<div class="quienes container" id="QuienesSomos">
		<h2 class="subtitul text-center" style="margin-bottom:1em">Qui&eacute;nes Somos</h2>
		<p>Asociación para el desarrollo de los Pueblos-ADP es una asociación civil nicaragüense, de inspiración cristiana, autónoma, apartidaria, de interés social y no lucrativa, fundada el 15 de septiembre de 1978.</p>
		<p>Con personalidad jurídica mediante Decreto Legislativo No 1147, publicado en el Diario Oficial La Gaceta No 289 del 10 de Diciembre de 1982, misma que fue ratificada en mayo de 1992 en el marco de la Ley General sobre Asociaciones Sin Fines de Lucro (Ley 147, del 20 de mayo de 1992).</p>
		<p>ADP está inscrita en el Departamento de Registro y Control de Asociaciones Civiles del Ministerio de Gobernación, con el número perpetuo 163, Folio 149 al 159, Tomo V, Libro Primero.</p>
	</div>
	<hr class="container">
	<div class="row container historia">
		<div class="col-md-6 linea-horizontal">
			<h2 class="subtitul text-center" style="margin-bottom:1em">Visión</h2>
			<p class="text-justify">ADP es ampliamente reconocida por su liderazgo, capacidad de servicio y alto nivel de desempeño en la generación de capacidades locales, entre las familias campesinas, para mejorar su calidad de vida, en un marco de Desarrollo Rural a Escala Humana.</p>
		</div>
		<div class="col-md-6">
			<h2 class="subtitul text-center" style="margin-bottom:1em">Misión</h2>
			<p class="text-justify">Trabajamos para lograr mejoras duraderas en las condiciones de vida de las familias campesinas empobrecidas, a través de procesos participativos y el desarrollo de capacidades de hombres, mujeres y jóvenes, desde un enfoque de género, generacional y ambiental.</p>
		</div>
	</div>
	<div class="pilares" id="Pilares">
		<h2 class="pilares-titul">
			<p>NUESTROS PILARES</p>
		</h2>
		<div class="row no-margin iconos">
			<div class="col-md-6">
				<a href="{{ URL::to('OrganizacionSocial') }}"><img src="{{ asset('img/OSC1.png') }}" alt="organizacion" class="img-responsive" id="organizacion"></a>
				<p class="text-center organizacion"> Familias campesinas acompañadas por la ADP</p>
			</div>
			<div class="col-md-6">
				<a href="{{ URL::to('MedioAmbiente') }}"><img src="{{ asset('img/RHF1.png') }}" alt="medioambiente" class="img-responsive" id="medioambiente"></a>			
				<p class="text-center medioamgiente">Manejo Sostenible de los Recursos Hídricos y Forestales para el Desarrollo Rural</p>
			</div>
			<div class="col-md-6">
				<a href="{{ URL::to('SaludComunitaria') }}"><img src="{{ asset('img/SCP1.png') }}" alt="salud" class="img-responsive" id="salud"></a>				
				<p class="text-center salud">Condiciones higiénicas sanitarias, nutricionales, fortalecidas y comportamientos saludables</p>
			</div>			
			<div class="col-md-6">
				<a href="{{ URL::to('DesarrolloInstitucional') }}"><img src="{{ asset('img/DI1.png') }}" alt="desarrollo" class="img-responsive" id="desarrollo"></a>				
				<p class="text-center desarrollo">Equipo de Trabajo articulado y fortalecido</p>
			</div>
		</div>
	</div>
	<div class="imagen-home" data-stellar-background-ratio="0.4" data-stellar-vertical-offset="-300"></div>
	<div class="ubicacion">
		<div id="map" class="mapa"></div>
	</div>	
@stop

@section('js')	

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAORLGtHmLzUlvBz1FspuJpiO3oo9lLdsc"></script>

	<script type="text/javascript">
		
		$('#organizacion').hover(function(){
			$(this).attr('src', "{{ asset('img/OSC2.png') }}");
		},
		function(){
			$(this).attr('src', "{{ asset('img/OSC1.png') }}");
		});

		$('#medioambiente').hover(function(){
			$(this).attr('src', "{{ asset('img/RHF2.png') }}");
		},
		function(){
			$(this).attr('src', "{{ asset('img/RHF1.png') }}");
		});

		$('#salud').hover(function(){
			$(this).attr('src', "{{ asset('img/SCP2.png') }}");
		},
		function(){
			$(this).attr('src', "{{ asset('img/SCP1.png') }}");
		});

		$('#desarrollo').hover(function(){
			$(this).attr('src', "{{ asset('img/DI2.png') }}");
		},
		function(){
			$(this).attr('src', "{{ asset('img/DI1.png') }}");
		});
	</script>

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

