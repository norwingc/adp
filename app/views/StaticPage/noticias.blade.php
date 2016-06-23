@extends('templates.maintemplate')

@section('title') ADP | Medio Ambiente y Cambio Clim&aacurte;tico @stop

@section('slider')
<div class="camera_wrap">
    <div data-src="{{asset('img/slider/noticias/1.jpg')}}"></div>        
</div>
<div class="img1">
	<h1 class="titul no-margin no-padding">Asociación para el Desarrollo de los Pueblos</h1>	
</div>
@stop

@section('contenido')	
	<div class="container">
		<a href="{{ asset('document/BOLETIN-ANUAL-2015-80216.pdf') }}" target="new"><img src="{{ asset('img/noticias/pdf1.jpg') }}" alt="Noticias" style="margin:3em auto; display:block" class="img-responsive"></a>	
		<h2 class="text-center">Boletín Anual 2015</h2>
	</div>
@stop