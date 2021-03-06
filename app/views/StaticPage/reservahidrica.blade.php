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
<div class="reserva">	
	<div class="row container">
		
		<div class="col-md-12"><h2 class="titulreserva">Reserva Hidrica Forestal</h2></div>
	</div>
	
	<div class="informacion">
		<div class="titulother"> <img src="{{ asset('img/hidrico-white.png') }}" alt="" style="width:20%"><span style="margin-left:10px">Recurso Hídrico</span></div>
	</div>

	<p class="container" style="margin-bottom:1em; font-size:1.2em">En la parte alta de la Reserva nace el Río Malacatoya, formando parte de la
Cuenca Hidrográfica # 69 que desemboca en el Lago Cocibolca. Dentro de la
Reserva, el Río recorre una longitud de 2,814 metros, alimentado por ocho
riachuelos, cinco ojos de agua, destacándose cuatro cascadas con alturas entre
12 y 42 metros.</p>
	
	<div class="container">
		<div class="row">
			<div class="sliderReserva">
				@foreach(SliderRecurso::all() as $value)
					<div><img src="{{ asset('img/slider/'.$value->path) }}" alt=""></div>
				@endforeach							
			</div>
		</div>
	</div>


	<div class="informacion">
		<div class="titulother"> <img src="{{ asset('img/florayfauna-white.png') }}" alt="" style="width:20%"><span style="margin-left:10px">Flora y Fauna</span></div>
	</div>

	<p class="container" style="margin-bottom:1em; font-size:1.2em">En la Reserva Hídrica Forestal ADP existen condiciones ambientales para el desarrollo
de plantas ornamentales “Tropicales Exóticas”, tales como: Orquídeas, Bromelias,
Helechos, Heliconias y demás.</p>
	
	<div class="container">
		<div class="row">
			<div class="sliderReserva">
				@foreach(SliderFlora::all() as $value)
					<div><img src="{{ asset('img/slider/'.$value->path) }}" alt=""></div>
				@endforeach	
			</div>
		</div>
	</div>

	<div class="informacion">
		<div class="titulother"> <img src="{{ asset('img/sendero-white.png') }}" alt="" style="width:20%"><span style="margin-left:10px">Senderos</span></div>
	</div>
	<p class="container" style="margin-bottom:1em; font-size:1.2em">La Reserva Hídrica Forestal-ADP cuenta con tres senderos de 2,500 metros de longitud
que conducen a diferentes atractivos turísticos, un mirador con excelentes vistas
panorámicas del área protegida, donde el visitante podrá observar los paisajes, la
conservación de los recursos naturales y la biodiversidad existente en la zona. Además,
se pueden apreciar variedad de mariposas, ranas, reptiles y aves, las cuales son el grupo
más diverso con 57 especies, seguido de los mamíferos con 38, reptiles 19 y anfibios 7
especies; de un total de 121 especies identificadas dentro del Área protegida Cerro
Cumaica-Cerro Alegre.</p>
	<div class="container">
	<div class="row">
			<div class="sliderReserva">
				@foreach(SliderSenderos::all() as $value)
					<div><img src="{{ asset('img/slider/'.$value->path) }}" alt=""></div>
				@endforeach	
			</div>
		</div>
	</div>
	<div class="container text-center">
		<div class="row">
			<h2 style="color:#689a62">La tierra provee lo suficiente para satisfacer las necesidades de cada hombre, pero no la avaricia de cada hombre.</h2>
			<h2 style="color:#689a62">Mahatma Gandhi.</h2>
		</div>
	</div>
</div>
@stop

@section('css')
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css"/>	
	{{ HTML::style('css/slick-theme.min.css') }}
	
@stop

@section('js')
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>

	<script type="text/javascript">
		
		$('.sliderReserva').slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3
		});
	</script>
@stop
