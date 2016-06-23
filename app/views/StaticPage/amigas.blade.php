@extends('templates.maintemplate')

@section('title') ADP @stop


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

<div class="amigas">
	<div class="seccion-color"></div>
	<div class="informacion">		
		<div class="container">
			<div class="col-md-3"><img src="{{ asset('img/unenteamigas.png') }}" alt="Desarrollo Institucional" class="img-responsive img-titul"></div>
			<div class="col-md-9"><h2 class="subtitul">Únete</h2></div>
		</div>

		<div class="titulother">Organismos de Cooperación</div>	


		<div class="paginasamigas container">
			<div class="row">
				<div class="col-md-4"><img src="{{ asset('img/fleger.png') }}" alt="" class="img-responsive"></div>
				<div class="col-md-8 text-center"><p class="sitio">sitio web: <a href="http://leger.org/en/">http://leger.org/en/</a></p></div>
			</div>

			<div class="row">
				<div class="col-md-4"><img src="{{ asset('img/manosunidas.jpg') }}" alt="" class="img-responsive"></div>
				<div class="col-md-8 text-center"><p class="sitio">sitio web: <a href="http://www.manosunidas.org/">http://www.manosunidas.org/</a></p></div>
			</div>

			<div class="row">
				<div class="col-md-4"><img src="{{ asset('img/geraliat.png') }}" alt="" class="img-responsive"></div>
				<div class="col-md-8 text-center"><p class="sitio" style="margin-top:2em">sitio web: <a href="http://www.gva.es/va/inicio/presentacion">http://www.gva.es/va/inicio/presentacion</a></p></div>
			</div>

			<div class="row">
				<div class="col-md-4"><img src="{{ asset('img/usaid.png') }}" alt="" class="img-responsive"></div>
				<div class="col-md-8 text-center"><p class="sitio">sitio web: <a href="https://www.usaid.gov/">https://www.usaid.gov/</a></p></div>
			</div>

			<div class="row">
				<div class="col-md-4"><img src="{{ asset('img/fontilles.png') }}" alt="" class="img-responsive"></div>
				<div class="col-md-8 text-center"><p class="sitio" style="margin-top:2em">sitio web: <a href="http://www.fontilles.org/">http://www.fontilles.org/</a></p></div>
			</div>

			<div class="row">
				<div class="col-md-4"><img src="{{ asset('img/save.png') }}" alt="" class="img-responsive"></div>
				<div class="col-md-8 text-center"><p class="sitio">sitio web: <a href="http://www.savethechildren.org">http://www.savethechildren.org</a></p></div>
			</div>

			<div class="row">
				<div class="col-md-4"><img src="{{ asset('img/caritas.png') }}" alt="" class="img-responsive"></div>
				<div class="col-md-8 text-center"><p class="sitio" style="margin-top:4em">sitio web: <a href="http://www.caritas.lu/">http://www.caritas.lu/</a></p></div>
			</div>

			<div class="row">
				<div class="col-md-4"><img src="{{ asset('img/devpaix.png') }}" alt="" class="img-responsive"></div>
				<div class="col-md-8 text-center"><p class="sitio">sitio web: <a href="https://www.devp.org/fr">https://www.devp.org/fr</a></p></div>
			</div>		

			<div class="row">
				<div class="col-md-4"><img src="{{ asset('img/caritasAlemana.jpg') }}" alt="" class="img-responsive" style="width:40%"></div>
				<div class="col-md-8 text-center"><p class="sitio">sitio web: <a href="http://www.caritas-international.de">http://www.caritas-international.de</a></p></div>
			</div>	

		</div>

		<div class="titulother">Alianzas</div>	

		<div class="container paginasamigas">
			<div class="row">
				<div class="col-md-4"><img src="{{ asset('img/fabretto.png') }}" alt="" class="img-responsive"></div>
				<div class="col-md-8 text-center"><p class="sitio">sitio web: <a href="https://www.fabretto.org/es/inicio/">https://www.fabretto.org/es/inicio/</a></p></div>
			</div>

			<div class="row">
				<div class="col-md-4" ><img src="{{ asset('img/nicasalud.png') }}" alt="" class="img-responsive"></div>
				<div class="col-md-8 text-center"><p class="sitio">sitio web: <a href="http://nicasalud.org.ni/">http://nicasalud.org.ni/</a></p></div>
			</div>

			<div class="row">
				<div class="col-md-4" style="margin-top:2em"><img src="{{ asset('img/alop.jpg') }}" alt="" class="img-responsive"></div>
				<div class="col-md-8 text-center"><p class="sitio">sitio web: <a href="http://www.alop.org.mx/">http://www.alop.org.mx/</a></p></div>
			</div>
		</div>
	</div>	


</div>


@stop