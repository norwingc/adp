@extends('templates.maintemplate')

@section('title') ADP | Noticias @stop

@section('slider')
<div class="camera_wrap">
    <div data-src="{{asset('img/slider/noticias/1.jpg')}}"></div>        
</div>
@stop

@section('contenido')	
	<div class="container noticias">
		<div class="row">
			<div class="col-md-4"><img src="{{ asset('img/noticias.png') }}" alt="" class="img-responsive" style="margin:0 0 0 auto; width:20% "></div>
			<h2 class="col-md-6">Noticias</h2>
		</div>

		<div class="noticia">
			@foreach(Historia::all() as $value)
				<div class="row" style="margin-bottom:4em">
					<?php 
						$fecha = $value->date; 
						$fecha = explode("-", $fecha);


						$mes = array(
							"January"   => "Enero",
							"February " => "Febrero",
							"March "    => "Marzo",
							"April "    => "Abril",
							"May"       => "Mayo",
							"June"      => "Junio",
							"July"      => "Julio",
							"August"    => "Agosto",
							"September" => "Septiembre",
							"October"   => "Octubre",
							"November"  => "Noviembre",
							"December"  => "Diciembre",
						);
					?>
					<div class="date col-md-3 text-center"> <span>{{ $fecha[0] }}</span> <br> {{ $mes[$fecha[1]] }}</div>
					<div class="contenido col-md-7">
						<img src="{{ asset('img/historia/'.$value->path) }}" alt="" class="img-responsive">
						<p>{{ $value->texto }}</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@stop