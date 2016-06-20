@extends('templates.maintemplate')

@section('title') ADP | Salud Comunitaria Preventiva @stop

@section('slider')
<div class="camera_wrap">
    <div data-src="{{asset('img/slider/desarrollo/1.jpg')}}"></div>
    <div data-src="{{asset('img/slider/desarrollo/2.jpg')}}"></div>
    <div data-src="{{asset('img/slider/desarrollo/3.jpg')}}"></div>   
    <div data-src="{{asset('img/slider/desarrollo/4.jpg')}}"></div>   
    <div data-src="{{asset('img/slider/desarrollo/5.jpg')}}"></div>       
</div>
<div class="img1">
	<h1 class="titul no-margin no-padding">Asociación para el Desarrollo de los Pueblos</h1>	
</div>
@stop

@section('contenido')	
<div class="desarrolloinfo">
	<div class="seccion-color"></div>
	<div class="informacion">		
		<div class="container">
			<div class="col-md-3"><img src="{{ asset('img/DI1.png') }}" alt="Desarrollo Institucional" class="img-responsive img-titul"></div>
			<div class="col-md-9"><h2 class="subtitul">Desarrollo Institucional</h2></div>
		</div>
		<div class="clear"></div>
		<div class="titulother">Líderes en la Generación de Servicios y Capacidades Locales</div>
		<div class="iconos">
			<img src="{{ asset('img/desarrollo1.png') }}">
			<span>DESARROLLO INSTITUCIONAL – ADP (2014-2018)</span>
			<p class="container">La Dirección Institucional de ADP a través de los Equipos de Trabajo, aúnan esfuerzos
				para obtener y desarrollar proyectos para el Desarrollo Rural y Sostenible en las zonas
				de intervención, garantizando un constante fortalecimiento en su proceso organizativo
				interno, recursos humanos y tecnológico.
			</p>
		</div>
		<div class="iconos">
			<img src="{{ asset('img/conocimiento.png') }}">
			<span>Gestión del Conocimiento</span>
		</div>
		<br>
		<div class="container infodesa" style="margin-top-2em">
			<p>El personal clave de la institución en cumplimiento a la Misión y Visión se capacita en
				base a las nuevas exigencias del entorno social y de las tendencias y prioridades
				actuales de la cooperación internacional. Participa en eventos con temas relacionados a
				los cuatro pilares institucionales, actualizándose constantemente.
			</p>
			<p>
				Temas: Agua, Medio Ambiente, Desarrollo Rural, etc. <br>
				Capacitaciones: Diagnóstico Rural Participativo, Sistema Contable ABC, etc. <br>	
				Alianzas: Universidades (Universidad Nacional Agraria -UNA, Managua, Universidad Internacional Agraria, UNIAG-Rivas), etc.
			</p>
		</div>
		<div class="iconos">
			<img src="{{ asset('img/gestionrecursos.png') }}">
			<span>Gestión de Recursos</span>
		</div>
		<br>
		<div class="container infodesa" style="margin-top-2em">
			<p>Gestionamos recursos alternativos que nos garantice la búsqueda de Agencias de
				Cooperación Nacionales o Extranjeras, estamos abiertos a formar alianzas con agencias
				interesadas en el financiamiento de nuestras propuestas de proyectos que surgen de un
				diagnóstico comunitario participativo que nos permita mejorar la calidad de vida de las
				familias campesinas.
			</p>
			<p>
				Alianza realizada con la Asociación Familia Padre Fabretto en la obtención de 6,012
				cajas de Arroz fortificado con soya para el benficio de 3,817 estudiantes de primaria en
				44 escuelas rurales, etc. <span class="leermas"> <a href="{{ URL::to('document/mas.pdf') }}" target="new">mas..</a></span>
			</p>
		</div>

		<div class="iconos">
			<img src="{{ asset('img/relaciones.png') }}">
			<span>Relaciones Externas</span>
		</div>
		<br>
		<div class="container infodesa" style="margin-top-2em">
			<p>Nuestras páginas web promocionan el actuar de nuestra institución. A través de esta
publicamos nuestros Boletines Anuales, damos a conocer las zonas en donde estamos
trabajando y las actividades que estamos desarrollando; ofrecemos además nuestro
aporte al cambio climático con nuestra Reserva Hídrica Forestal ubicada en San José de
los Remates en Boaco.
			</p>
			<p>
				Somos miembros activos de la agencia ALOP, Red Nicasalud y Federación de
Organismos No Gubernamentales de Nicaragua.
			</p>
			<p>Elaboramos un Boletín Anual de nuestro quehacer institucional y lo compartimos con
las Agencias Internacionales con la cuales trabajamos, además con Universidades,
Fundaciones y Redes Nacionales, y con el sector público y privado.</p>
			<p>Elaboramos dos videos en relación a la Reserva Hídrica Forestal – ADP, en los temas de
Agua y Bosques, los que hemos compartido con las instituciones tanto
Gubernamentales como Internacionales.</p>
			<p>Elaboramos un brouchure del proyecto terminado de Manos Unidas…..
Constancia de reconocimiento de trabajo de las Alcaldías de Belén, Nandaime, San José
de los Remates, Somotillo y Delegaciones Municipales del MINED.</p>						
		</div>

	</div>	
</div>

@stop