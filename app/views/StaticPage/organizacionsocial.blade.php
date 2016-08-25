@extends('templates.maintemplate')

@section('title') ADP | Organizacion Social Comunitaria @stop

@section('slider')
<div class="camera_wrap">
     @foreach(SliderOrganizacion::all() as $value)
	    <div data-src="{{asset('img/slider/'.$value->path)}}"></div>	    
    @endforeach     
</div>
<div class="img1">
	<h1 class="titul no-margin no-padding">Asociación para el Desarrollo de los Pueblos</h1>	
</div>
@stop

@section('css')
	<style type="text/css">
		.informacion .overhidden{
			min-height: 145em;
		}
		.mapa2{
			margin-top: -120px !important;
		}
	</style>
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
			
		</div>

		<div class="overhidden">
			<div class="align first">
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
					<div class="siguiente" style="color:#F18984"><i class="glyphicon glyphicon-chevron-right right" data-position="first"></i></div>
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
			<div class="align second">
				<div class="titulother">Fortalecimiento a la Seguridad Alimentaria a través de la retención y comercialización local de Granos Básicos en el departamento de Boaco</div>

				<div class="row no-margin">
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/agenciaOSC.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-5"><span>Agencia de Cooperación:</span> MANOS UNIDAS ESPAÑA </div>
					<div class="clear"></div>
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/fechaOSC.png') }}" alt="Fecha" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-5"><span>Fecha de ejecución:</span> junio 2013 a junio 2014</div>
					<img src="{{ asset('img/manosunidas.jpg') }}" alt="Usaid" class="usaidlogo">
				</div>

				<div class="row no-margin">
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/ubicacionSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-11"><span>Ubicación: </span>  Zona rural del Municipio de Boaco.</div>
					<div class="clear"></div>
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/poblacionSCP.png') }}" alt="Agencia" class="img-responsive icono no-margin"></div>
					<div class="texto col-xs-10 no-margin col-md-5"><span>Población Beneficiaria: </span> 85 Familias, 595 personas de 3 comunidades.</div>
					<div class="clear"></div>
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/objetivoSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-5"><span>Objetivo estratégico: </span> Contribuir a la retención local de la producción de granos básicos en tres comunidades rurales del Departamento de Boaco.</div>
					<div class="mapa mapa2"><img src="{{ asset('img/mapa.jpg') }}"alt="Mapa" class="img-responsive"></div>
				</div>

				<div class="row no-margin">
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/impactoSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-11"><span>Impacto alcanzado: </span> </div>
					<div class="clear"></div>	
					<p class="container" style="margin-bottom:2em"><strong>Fortalecer las capacidades de las familias para comercializar sus granos Básicos con precios justos.</strong></p>
				</div>	

				<div class="row no-margin">
					<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-8">Familias beneficiadas asumieron el compromiso de trabajar y participar en las actividades que impulsa el proyecto para unificar esfuerzos y promover la gestión de la Seguridad Alimentaria a través del acopio y almacenamiento de granos básicos en silos metálicos.</div>
					<div class="anterior" style="color:#f18984"><i class="glyphicon glyphicon-chevron-left left" data-position="second"></i></div>
					<div class="clear"></div>

					<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-8">Familias organizadas lograron suscribir acuerdos en consenso, mediante el cual éstas se comprometen a asumir su responsabilidad para la sostenibilidad del proyecto.</div>
					<div class="clear"></div>

					<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-8">Integración de 8 jóvenes en las Comisiones Sociales y Comité de Fondos Social Comunitario, entre ellas son 4 mujeres y 4 hombres, lo que permitió el fortalecimiento a las estructuras directivas en redacción de documentos, informes y registro de datos cuantitativos y cualitativos.</div>
					<div class="clear"></div>

					<p class="container" style="margin-bottom:2em"><strong>Garantizado el almacenamiento de granos básicos para consumo y semilla de siembra.</strong></p>

					<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-8">9 promotores locales de tecnologías capacitados y con habilidades para la construcción de silos de 18 y 30 qq de capacidad de almacenamiento.</div>
					<div class="clear"></div>

					<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-8">44 personas capacitadas en el uso y manejo de silos metálicos, entre ellas 22 mujeres y 22 hombres.</div>
					<div class="clear"></div>

					<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-8">Familias organizadas toman sus propias decisiones y planifican en qué momento se realizan las reuniones y las diferentes actividades para la implementación del proyecto.</div>
					<div class="clear"></div>

					<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-8">Se cuenta con una capacidad de almacenamiento de 540 quintales de granos básicos, gracias a la construcción de 9 silos de 30 quintales y 15 silos de 18 quintales.</div>
					<div class="clear"></div>

					<p class="container" style="margin-bottom:2em"><strong>Establecido un Fondo Social Comunitario con Igualdad de oportunidades para mujeres y hombres.</strong></p>


					<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-8">Elaborada, Consensuada y Aprobada una política de Fondo Social Comunitario por las 85 familias beneficiarias de las tres comunidades, entre ellas 43 mujeres y 42 hombres con igualdad de oportunidad.</div>
					<div class="clear"></div>


					<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-8">Tres Comité de Fondo comunitarios electos por sus Asambleas Comunitarias, integrada por 12 miembros entre ellos 6 mujeres (50%) y 6 hombres (50%), con criterios fundamentados en valores morales.</div>
					<div class="clear"></div>


					<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-8">Tres organizaciones sociales recibieron sus fondos para el proceso de acopio, retención y comercialización de granos básicos Maíz y Frijol por la suma de C$ 245,200.00 Córdobas Netos.</div>
					<div class="clear"></div>


					<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-8">79 Familias se benefician al vender sus cosechas en los centros de acopio en sus propias comunidades</div>
					<div class="clear"></div>


					<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-8">Tres organizaciones sociales logran la recuperación del Fondo Social Comunitario por un monto total de C$ 261,175.50 Córdobas Netos.</div>
					<div class="clear"></div>


					<div class="col-md-offset-1 col-md-1 col-xs-2"><img src="{{ asset('img/lineaSCP.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-8">111 Familias de las 3 comunidades y sectores aledaños se benefician al comprar sus granos básicos para el consumo familiar en los centros de distribución.</div>
					<div class="clear"></div>
				</div>	
			</div>
		</div>

	</div>
</div>		

@stop