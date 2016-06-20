@extends('templates.maintemplate')

@section('title') ADP | Medio Ambiente y Cambio Clim&aacurte;tico @stop

@section('slider')
<div class="camera_wrap">
    <div data-src="{{asset('img/slider/ambiente/1.jpg')}}"></div>
    <div data-src="{{asset('img/slider/ambiente/2.jpg')}}"></div>
    <div data-src="{{asset('img/slider/ambiente/3.jpg')}}"></div>   
    <div data-src="{{asset('img/slider/ambiente/4.jpg')}}"></div>       
</div>
<div class="img1">
	<h1 class="titul no-margin no-padding">Asociación para el Desarrollo de los Pueblos</h1>	
</div>
@stop

@section('contenido')
<div class="reserva">	
	<div class="row container">
		<div class="col-md-3"><img src="{{ asset('img/rana.png') }}" alt="Rana" class="img-responsive"></div>
		<div class="col-md-9"><h2 class="titulreserva">Reserva Hidrica Forestal</h2></div>
	</div>
	
	<div class="informacion">
		<div class="titulother"> <img src="{{ asset('img/hidrico-white.png') }}" alt="" style="width:20%"><span style="margin-left:10px">Recurso Hídrico</span></div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="sliderReserva">
				<div><img src="{{ asset('img/slider/hidrica/1.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/hidrica/2.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/hidrica/3.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/hidrica/4.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/hidrica/5.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/hidrica/6.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/hidrica/7.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/hidrica/8.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/hidrica/9.jpg') }}" alt=""></div>
			</div>
		</div>
	</div>


	<div class="informacion">
		<div class="titulother"> <img src="{{ asset('img/florayfauna-white.png') }}" alt="" style="width:20%"><span style="margin-left:10px">Flora y Fauna</span></div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="sliderReserva">
				<div><img src="{{ asset('img/slider/flora/1.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/flora/2.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/flora/3.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/flora/4.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/flora/5.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/flora/6.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/flora/7.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/flora/8.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/flora/9.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/flora/10.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/flora/11.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/flora/12.jpg') }}" alt=""></div>
			</div>
		</div>
	</div>

	<div class="informacion">
		<div class="titulother"> <img src="{{ asset('img/sendero-white.png') }}" alt="" style="width:20%"><span style="margin-left:10px">Senderos</span></div>
	</div>
	<div class="container">
	<div class="row">
			<div class="sliderReserva">
				<div><img src="{{ asset('img/slider/senderos/1.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/senderos/2.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/senderos/3.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/senderos/4.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/senderos/5.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/senderos/6.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/senderos/7.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/senderos/8.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/senderos/9.jpg') }}" alt=""></div>
				<div><img src="{{ asset('img/slider/senderos/10.jpg') }}" alt=""></div>
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
