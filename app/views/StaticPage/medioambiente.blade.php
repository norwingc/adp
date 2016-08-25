@extends('templates.maintemplate')

@section('title') ADP | Medio Ambiente y Cambio Clim&aacurte;tico @stop

@section('slider')
<div class="camera_wrap">
   @foreach(SliderAmbiente::all() as $value)
	    <div data-src="{{asset('img/slider/'.$value->path)}}"></div>	    
    @endforeach        
</div>
<div class="img1">
	<h1 class="titul no-margin no-padding">Asociación para el Desarrollo de los Pueblos</h1>	
</div>
@stop

@section('contenido')	
<div class="medioambiente">
	<div class="seccion-color"><h2 class="subtitul">Medio Ambiente y Cambio Clim&aacute;tico</h2></div>
	<div class="informacion">		
		<div class="container">
			<div class="col-md-3"><img src="{{ asset('img/RHF1.png') }}" alt="Medio Ambiente y Cambio Climatico" class="img-responsive img-titul"></div>		
			<div class="col-md-9">
				<p style="margin-top:3em">En 1996, la ADP adquirió una propiedad de 114.8 hectáreas (164 manzanas) en la parte alta de la cuenca del Río Malacatoya, en el municipio de San José de los Remates, dentro del Área Protegida Cerro Cumaica -Cerro Alegre, localizada en el Departamento de Boaco.</p>
			</div>
			<div class="clear"></div>
			<p style="margin-top:1em">Durante 18 años la ADP ha trabajado, de manera ininterrumpida, para contribuir al manejo sostenible de los Recursos Hídricos y Forestales, en lo que hoy constituye la RESERVA HÍDRICA FORESTAL ADP (RHF-ADP)</p>
			<a href="{{ URL::to('ReservaHidrica') }}"><img src="{{ asset('img/reservahdricaaqui.png') }}" alt="Reserva Hidrica" class="img-responsive" style="margin:auto"></a>
		</div>
		<div class="titulother">Reserva Hídrica Forestal</div>
		<div class="row no-margin">
			<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/quienes-reserva.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-10"><span>QUÉ ES LA RESERVA HÍDRICA FORESTAL-ADP</span></div>
			<div class="clear"></div>
			<p class="container" style="margin-bottom:2em">La Reserva Hídrica Forestal – ADP es una propiedad de 115 hectáreas de extensión (aproximadamente 165 manzanas), perteneciente a la Asociación para el Desarrollo de los Pueblos, ubicada a 107 kilómetros de Managua, en la parte alta del Río Malacatoya, en el municipio San José de los Remates, departamento de Boaco, Nicaragua.</p>
			
			<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/objetivoRH.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-10"><span>VISION DE LA ADP EN LA RESERVA HÍDRICA FORESTAL</span></div>
			<div class="clear"></div>
			<p class="container" style="margin-bottom:2em">Ser un referente nacional e internacional en la conservación y protección del Medio Ambiente y los Recursos Naturales dentro del Área Natural Protegida Cerro Cumaica-Cerro Alegre.</p>

			<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/mision-reserva.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-10"><span>MISIÓN DE LA ADP EN LA RESERVA HÍDRICA FORESTAL</span></div>
			<div class="clear"></div>
			<p class="container" style="margin-bottom:2em">Garantizar la conservación, la protección y el manejo sostenible del recurso agua, los suelos, los bosques y la biodiversidad existentes en la Reserva Hídrica Forestal-ADP, mediante acciones que garanticen la producción y calidad del agua natural; el manejo de los bosques y los suelos; la puesta en práctica de acciones para la promoción del ecoturismo y el paisajismo rural comunitario; el desarrollo de investigaciones en los campos de la academia, la ciencia, la tecnología; y la educación ambiental, para el Desarrollo Humano y Rural.</p>

			<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/ubicacionRH.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-10"><span>RESERVA HÍDRICA FORESTAL-ADP: ZONA DE PRODUCCIÓN DE AGUA</span></div>
			<div class="clear"></div>
			<p class="container" style="margin-bottom:2em">La Reserva Hídrica Forestal-ADP forma parte del sector declarado por el Ministerio del Ambiente y Recurso Naturales-MARENA, como Zona de Producción de Agua, dentro del Área Natural Protegida Cerro Cumaica-Cerro Alegre.</p> 
			<p class="container" style="margin-bottom:2em">Por más de 23 años, en la Reserva Hídrica Forestal, la ADP ha garantizado el manejo adecuado de los bosques a través de prácticas amigables con el medio ambiente: no permitiendo las quemas, no utilizado productos químicos, el establecimiento de obras de conservación de suelos, la reforestación y regeneración natural.</p> 
			<p class="container" style="margin-bottom:2em">Actualmente, existe una cobertura forestal de 156.52 manzanas, que representa más del 95 por ciento del área total de la Reserva Hídrica Forestal-ADP, distribuida en 36.52 manzanas reforestadas y 120 manzanas de regeneración natural; eso está permitiendo captar la lluvia que cae durante todo el año, protegiendo los suelos, garantizando la infiltración del agua que alimenta a 6 ojos de aguas, 8 riachuelos y quebradas, protegiendo de esa manera las fuentes de agua, el nacimiento y la rivera del Río Malacatoya.</p> 
			<p class="container" style="margin-bottom:2em">También estamos garantizado la protección y conservación del Bosque de Galería más allá de 100 metros a cada lado de la rivera del Rio Malacatoya, en 2,814 metro lineales que recorre el río dentro de la propiedad de ADP</p> 
			<p class="container" style="margin-bottom:2em">Gracias a ese esfuerzo y a pesar de la sequía de los últimos tres años, que fue más intensa durante 2015, se está garantizando que el Río Malacatoya cuente con agua durante los 365 días del año, contribuyendo de esa manera a que 3,234 personas de 539 familias campesinas, en 14 comunidades campesinas que habitan en la zona seca, aguas abajo del río, se estén beneficiando en la actualidad del agua para fines de consumo humano, actividades del hogar, el patio y para la producción agropecuaria que les ofrecen oportunidades de mejoras sociales y económica.</p> 
			
			
		</div>
	</div>
</div>		

@stop