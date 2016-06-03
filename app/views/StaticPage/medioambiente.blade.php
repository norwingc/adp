@extends('templates.maintemplate')

@section('title') ADP | Medio Ambiente y Cambio Climatico @stop

@section('slider')
	 @include('templates.__slider')
@stop

@section('contenido')	
<div class="medioambiente">
	<div class="seccion-color"><h2 class="subtitul">Medio Ambiente y Cambio Climatico</h2></div>
	<div class="informacion">		
		<div class="container">
			<div class="col-md-3"><img src="{{ asset('img/RHF1.png') }}" alt="Medio Ambiente y Cambio Climatico" class="img-responsive img-titul"></div>		
			<div class="col-md-9">
				<p style="margin-top:3em">En 1996, la ADP adquirió una propiedad de 114.8 hectáreas (164 manzanas) en la parte alta de la cuenca del Río Malacatoya, en el municipio de San José de los Remates, dentro del Área Protegida Cerro Cumaica -Cerro Alegre, localizada en el Departamento de Boaco.</p>
			</div>
			<div class="clear"></div>
			<p style="margin-top:1em">Durante 18 años la ADP ha trabajado, de manera ininterrumpida, para contribuir al manejo sostenible de los Recursos Hídricos y Forestales, en lo que hoy constituye la RESERVA HÍDRICA FORESTAL ADP (RHF-ADP)</p>
			<img src="{{ asset('img/reservahdricaaqui.png') }}" alt="Reserva Hidrica" class="img-responsive" style="margin:auto">
		</div>
		<div class="titulother">Occidente Unido por la Salud de Las Familias (FAMISALUD) uno</div>
		<div class="row no-margin">
			<div class="col-md-1 col-xs-2"><img src="{{ asset('img/ubicacionRH.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-8"><span>Ubicaci&oacute;n:</span> Localizada a los 12°36´674“ N y 85°42´ 725“ O a 107 km de Managua, de los cuales 100 km son en carretera y 7 kilómetros de camino de todo tiempo.</div>
			
			<div class="clear"></div>
			<div class="col-md-1 col-xs-2"><img src="{{ asset('img/poblacionRH.png') }}" alt="Agencia" class="img-responsive icono no-margin"></div>
			<div class="texto col-xs-10 no-margin col-md-5"><span>Población Beneficiaria: </span>  El conservar durante todo año el caudal de agua del Río Malacatoya está beneficiando de manera directa a las familias de 14 comunidades campesinas hasta desembocar en el Embalse Las Canoas.</div>
			<div class="mapa"><img src="{{ asset('img/mapa.jpg') }}"alt="Mapa" class="img-responsive"></div>

			<div class="clear"></div>

			<div class="col-md-1 col-xs-2"><img src="{{ asset('img/objetivoRH.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-8"><span>Objetivo: </span> Generar capacidades que beneficien a las comunidades locales, para preservar el medio ambiente ante las necesidades actuales del mundo.</div>
			<div class="clear"></div>

			<div class="col-md-1 col-xs-2"><img src="{{ asset('img/impactoRH.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10"><span>Impacto alcanzado: </span></div>
			<div class="clear"></div>

			<div class="col-md-offset-1 col-md-1"><img src="{{ asset('img/hidrico.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10"><span>Recurso Hídrico </span></div>
			<p class="col-md-offset-2 col-md-10 container" style="margin-bottom: 2em">En la parte alta de la Reserva nace el Río Malacatoya, formando parte de la Cuenca Hidrográfica # 69 que desemboca en el Lago Cocibolca. Dentro de la Reserva, el Río recorre una longitud de 2,814 metros, alimentado por ocho riachuelos, cinco ojos de agua, destacándose cuatro cascadas con alturas entre 12 y 42 metros.</p>
			

			<div class="col-md-offset-1 col-md-1"><img src="{{ asset('img/florayfauna.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10"><span>Flora y Fauna</span></div>
			<p class="col-md-offset-2 col-md-10 container" style="margin-bottom: 2em">En la Reserva Hídrica Forestal ADP existen condiciones ambientales para el desarrollo de plantas ornamentales “Tropicales Exóticas”, tales como: Orquídeas, Bromelias, Helechos, Heliconias y demás.</p>

			<div class="col-md-offset-1 col-md-1"><img src="{{ asset('img/senderos.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10"><span>Senderos </span></div>
			<p class="col-md-offset-2 col-md-10 container" style="margin-bottom: 2em">La Reserva Hídrica Forestal-ADP cuenta con tres senderos de 2,500 metros de longitud que conducen a diferentes atractivos turísticos, un mirador con excelentes vistas panorámicas del área protegida, donde el visitante podrá observar los paisajes, la conservación de los recursos naturales y la biodiversidad existente en la zona. Además, se pueden apreciar variedad de mariposas, ranas, reptiles y aves, las cuales son el grupo más diverso con 57 especies, seguido de los mamíferos con 38, reptiles 19 y anfibios 7 especies; de un total de 121 especies identificadas dentro del Área protegida Cerro Cumaica-Cerro Alegre.</p>
			
			<div class="col-md-offset-1 col-md-1"><img src="{{ asset('img/agenciaRH.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10"><span>Contribución social </span></div>
			<p class="col-md-offset-2 col-md-10 container" style="margin-bottom: 2em">El conservar durante todo año el caudal de agua del Río Malacatoya está beneficiando de manera directa a las familias de 14 comunidades campesinas hasta desembocar en el Embalse Las Canoas.</p>
		</div>
	</div>
</div>		

@stop