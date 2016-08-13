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
			<div class="row">
				<div class="date col-md-3 text-center"> <span>11</span> <br> Agosto</div>
				<div class="contenido col-md-7">
					<img src="{{ asset('img/noticia.jpg') }}" alt="" class="img-responsive">
					<p>ADP EN EL MES DE LOS NIÑOS Y NIÑAS . "QUE NO FALTE SALUD, ALIMENTACIÓN, EDUCACIÓN GRATUITA, UN DIGNO COMEDOR , UN ÁRBOL POR CADA NIÑO Y NIÑA , EN ARMONÍA CON EL MEDIO AMBIENTE"</p>
				</div>
			</div>
		</div>
	</div>
@stop