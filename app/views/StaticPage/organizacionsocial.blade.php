@extends('templates.maintemplate')

@section('title') ADP | Organizacion Social Comunitaria @stop

@section('slider')
	 @include('templates.__slider')
@stop

@section('contenido')
<div class="organizacion">
	<div class="seccion-color"><h2 class="subtitul">Programa de Organización Social Comunitaria</h2></div>
	<div class="informacion">		
		<div class="container">
			<div class="col-md-3"><img src="{{ asset('img/OSC1.png') }}" alt="Medio Ambiente y Cambio Clim&aacurte;tico" class="img-responsive img-titul"></div>		
			<div class="col-md-9">
				<p style="margin-top:3em">Familias campesinas acompañadas por la ADP fortalecidas en sus capacidades organizativas y autogestionarias para lograr la coordinación y gestión con otros autores que les permita la consecución de recursos y medios para la solución de sus problemas y la satisfacción de sus necesidades.</p>
			</div>
			
			<div class="clear"></div>
			<p style="margin-top:1em">Durante 18 años la ADP ha trabajado, de manera ininterrumpida, para contribuir al manejo sostenible de los Recursos Hídricos y Forestales, en lo que hoy constituye la RESERVA HÍDRICA FORESTAL ADP (RHF-ADP)</p>
		</div>
		<div class="titulother">Fortalecer el desarrollo socio- económico y productivo de Asociaciones locales en 14 comunidades de los núcleos de Tola, Belén y Ocho mogo</div>

		<div class="row no-margin">
			<div class="col-md-1 col-xs-2"><img src="{{ asset('img/agenciaOSC.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-5"><span>Agencia de Cooperación:</span> L´OEUVRE LEGER Canadá </div>
			<div class="clear"></div>
			<div class="col-md-1 col-xs-2"><img src="{{ asset('img/fechaOSC.png') }}" alt="Fecha" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-5"><span>Fecha de ejecución:</span> Octubre/2009-Septiembre/2012</div>
			<img src="{{ asset('img/fleger.png') }}" alt="Usaid" class="usaidlogo">
		</div>

		<div class="row no-margin">
			<div class="col-md-1 col-xs-2"><img src="{{ asset('img/ubicacionSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-11"><span>Ubicación: </span>  Zona rural de los municipios de Tola y Belén, pertenecientes al departamento de Rivas.</div>
			<div class="clear"></div>
			<div class="col-md-1 col-xs-2"><img src="{{ asset('img/poblacionSCP.png') }}" alt="Agencia" class="img-responsive icono no-margin"></div>
			<div class="texto col-xs-10 no-margin col-md-5"><span>Población Beneficiaria: </span> 334 familias de 14 comunidades.</div>
			<div class="clear"></div>
			<div class="col-md-1 col-xs-2"><img src="{{ asset('img/objetivoSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-5"><span>Objetivo estratégico: </span>  Garantizar que 334 familias organizadas en 14 grupos organizados dispongan de recursos, tanto económicos como en especies, para mayor disponibilidad de Alimentos e Ingresos económico.</div>
			<div class="mapa"><img src="{{ asset('img/mapa.jpg') }}"alt="Mapa" class="img-responsive"></div>
		</div>
		<div class="row no-margin">
			<div class="col-md-1 col-xs-2"><img src="{{ asset('img/impactoSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-11"><span>Impacto alcanzado: </span> </div>
			<div class="clear"></div>	
			<p class="container" style="margin-bottom:2em"><strong>Efecto1: Grupos organizados mejoraron su nivel de autonomía y sostenibilidad en la gestión del desarrollo comunitario.</strong></p>
		</div>	

		<div class="row no-margin">
			<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-8">14 Grupos organizados con sus Juntas Directivas, integradas por 59 mujeres y 30 hombres, garantizan por medio de su organización unificar los intereses comunes, mejorando la comunicación, la coordinación y la gestión; estableciendo derechos, deberes y compromisos que permiten promover la solidaridad grupal de 334 familias organizadas de los municipios de Tola y Belén del Departamento de Rivas, Nicaragua. </div>
			<div class="clear"></div>

			<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-8">El 92.85 % de los grupos organizados a través de 14 tesorero (a) elaboraron, presentaron y aprobaron 150 informes de bancos que fueron firmados por la asamblea y enviado copia a la ADP; con el objetivo de verificar, de manera transparente el uso y retorno de 14 fondos sociales comunitarios.</div>
			<div class="clear"></div>

			<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-8">14 políticas del Fondo Social Comunitarios elaborada, revisada y aprobada por 14 juntas directiva y 14 Asamblea comunitarias con el propósito de declarar reglas, normas, procedimientos, montos y tiempos al momento del otorgamiento de financiamiento para actividades productivas, rentables.</div>
			<div class="clear"></div>

			<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-8">54 Promotores rurales capacitados garantizan, de manera transparente, democrática y participativa, el buen uso y manejo de 14 Bancos Revolventes de aves, cerdos y semillas de granos básicos para la siembra. </div>
			<div class="clear"></div>

			<p class="container" style="margin-bottom:2em"><strong>Efecto 2: Grupos organizados poseen fondo social comunitario para responder a sus necesidades básicas.</strong></p>

			<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-8">A través del apoyo parcial del Fondo Social Comunitario a 102 personas 80 mujeres (80%) y 22 hombres (20%), integradas en los 14 grupos organizados, mejoraron sus viviendas, cultivaron granos básicos de Maíz, Sorgo, Frijol y Arroz, retuvieron sus granos de cosecha, crearon pequeños negocios, mejoraron sus fincas y mejoraron sus viviendas. C$ 876,866.61 (ochocientos setenta y seis mil ochocientos sesenta y seis con 61/100 córdobas) equivalente en dólares U$34,610.60.</div>
			<div class="clear"></div>

			<p class="container" style="margin-bottom:2em"><strong>Otros Logros Relevantes.</strong></p>

			<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-8">54 personas (33 mujeres y 21 hombres) promotoras de 14 bancos revolventes de aves, cerdos, semillas, los cuales tiene como propósito que respalde la siembra, producción, y alimentación familiar, y son administrado de manera democrática y participativa para la toma decisiones, en función de su interés comunitario.</div>
			<div class="clear"></div>

			<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-8">164 Familias mejoran y diversifican su dieta alimenticia con el consumo de huevos y carne, producto del acceso a 1804 aves proveniente de los Bancos Revolventes de 12 grupos organizados. Además, 228 personas mejoran y diversifican su dieta alimenticia con el consumo de carne, proveniente de 456 cerdos de los 12 Bancos Revolventes que garantizan la disponibilidad y estabilidad del suministro de alimento</div>
			<div class="clear"></div>

			<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-8">Con el propósito de asegurar la siembras de granos básico, la producción y alimentación del núcleo familiar, hay 14 grupos organizado de los municipio de Tola y Belén del Departamento de Rivas- Nicaragua que cuentan con igual número de bancos revolventes de semillas para siembra, beneficiando directamente a 210 Personas organizadas, 137 mujeres (65%) y 73 hombres (35%) apoyadas con 33,374.73 libras de semillas de siembra, de las cuales 12,876.86 libras son de sorgo, 9158.88 libras son de arroz, 6944.27 libras son de maíz y 4394.72 libras de frijol; estableciendo 61.21 mz de sorgo con rendimiento de 65,000 libras, 95.6 mz de arroz con rendimientos de 306,100 libras; 86,56mz de maíz con rendimiento de 75,800 libras y 59.83mz de frijol con rendimientos de 5,983 libras.</div>
			<div class="clear"></div>

			<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
			<div class="texto col-xs-10 col-md-8">312 familias de 13 grupos organizados han mejorado las condiciones medio ambiental de sus patios, la autosuficiencia alimentaria e ingresos económicos a través de diversificación los sistemas de producción de patios a través del aprovechamiento de 3,849 árboles frutales de aguacate, naranja, mangos, jocotes.</div>
			<div class="clear"></div>
		</div>

	</div>
</div>		

@stop