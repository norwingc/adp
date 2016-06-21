@extends('templates.maintemplate')

@section('title') ADP | Salud Comunitaria Preventiva @stop

@section('slider')
<div class="camera_wrap">
    <div data-src="{{asset('img/slider/salud/1.jpg')}}"></div>
    <div data-src="{{asset('img/slider/salud/2.jpg')}}"></div>
    <div data-src="{{asset('img/slider/salud/3.jpg')}}"></div>   
    <div data-src="{{asset('img/slider/salud/4.jpg')}}"></div>   
    <div data-src="{{asset('img/slider/salud/5.jpg')}}"></div> 
    <div data-src="{{asset('img/slider/salud/6.jpg')}}"></div> 
</div>
<div class="img1">
	<h1 class="titul no-margin no-padding">Asociación para el Desarrollo de los Pueblos</h1>	
</div>
@stop

@section('contenido')	
<div class="saludinfo">
	<div class="seccion-color"></div>
	<div class="informacion">		
		<div class="container">
			<div class="col-md-3"><img src="{{ asset('img/SCP1.png') }}" alt="Salud Comunitaria Preventiva" class="img-responsive img-titul"></div>
			<div class="col-md-9"><h2 class="subtitul">Salud Comunitaria Preventiva</h2></div>
		</div>
		<div class="clear"></div>
		<div class="overhidden">
			<div class="align first">
				<div class="titulother">Occidente Unido por la Salud de Las Familias (FAMISALUD) </div>
				<div class="row no-margin">
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/agencia.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-5"><span>Agencia de Cooperación:</span> Agencia de los Estados Unidos para el Desarrollo Internacional (USAID)</div>
					<div class="clear"></div>
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/fecha.png') }}" alt="Fecha" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-5"><span>Fecha de ejecución:</span> Octubre 2006 a septiembre 2009</div>
					<img src="{{ asset('img/usaid.png') }}" alt="Usaid" class="usaidlogo">
				</div>
				<div class="row no-margin">
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/ubicacion.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-11"><span>Ubicación: </span>  Zona rural de los municipios Somotillo, Santo Tomás, Cinco Pinos, San Pedro, San Francisco del Norte y Posoltega, pertenecientes al departamento de Chinandega.</div>
					<div class="clear"></div>
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/poblacion.png') }}" alt="Agencia" class="img-responsive icono no-margin"></div>
					<div class="texto col-xs-10 no-margin col-md-5"><span>Población Beneficiaria: </span>   21,664 familias de 91 comunidades.</div>
					<div class="clear"></div>
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/objetivo.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-5"><span>Objetivo estratégico: </span>  Contribuir a  mejorar el estado de salud de los niños y las niñas menores de 5 años, madres lactantes y las familias a través de acciones impulsadas en las estrategias de PROCOSAN, MATERNIDAD SEGURA e HIGIENE AMBIENTAL, basadas en el desarrollo de procesos de transferencia de conocimientos y cambios  de comportamientos con la  participación  de toda la comunidad y las unidades de salud del MINSA. </div>
					<div class="mapa"><img src="{{ asset('img/mapa.jpg') }}"alt="Mapa" class="img-responsive"></div>
				</div>
				<div class="row no-margin">
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/impacto.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10"><span>Impacto alcanzado: </span> Mayor acceso de la población a los servicios de  de atención primaria de salud, destacándose una reducción de dos tercios de la mortalidad materna a través de la estrategia ¨Plan de Parto Seguro¨, y de la mitad en la morbilidad (número de enfermos) por Infecciones Respiratoria Agudas y Enfermedades Diarreicas Agudas en menores de 5 años, y de 61% de la desnutrición, gracias al incremento de los conocimientos sobre los cuidados esenciales de la embarazada, cómo identificar las señales de peligro durante el embarazo, parto y puerperio, el reconocimiento inmediato de los signos de peligro de las infecciones respiratorias agudas y enfermedades diarreicas agudas, y una alimentación saludable equilibrada y variada para prevenir la desnutrición, haciendo hincapié en la lactancia materna exclusiva hasta los 6 meses y complementaria hasta los dos años de edad, así como el suplemento de micronutrientes (vitaminas y minerales).</div>
					<div class="siguiente"><i class="glyphicon glyphicon-chevron-right right" data-position="first"></i></div>
				</div>
			</div>

			<div class="align second">		
				<div class="titulother">Creciendo Sano</div>
				<div class="row no-margin">
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/agencia.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-5"><span>Agencia de Cooperación:</span>  Fundación Catriona Hargreves del Reino Unido.</div>
					<div class="clear"></div>
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/fecha.png') }}" alt="Fecha" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-5"><span>Fecha de ejecución:</span>  1 de abril al 30 de noviembre del 2013.</div>
					
				</div>
				<div class="row no-margin">
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/ubicacion.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-11"><span>Ubicación: </span> Zona rural de los municipios Villa Nueva y Somotillo,  departamento de Chinandega.</div>
					<div class="clear"></div>
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/poblacion.png') }}" alt="Agencia" class="img-responsive icono no-margin"></div>
					<div class="texto col-xs-10 no-margin col-md-5"><span>Población Beneficiaria: </span>  2302 escolares de 20 escuelas primarias.</div>
					<div class="clear"></div>
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/objetivo.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-5"><span>Objetivo estratégico: </span>  Contribuir a cultivar en los escolares actitudes y prácticas saludables orientadas a promover la prevención de los factores de riesgo que guardan una estrecha relación con los problemas de salud que más le afectan como son las diarreas, el parasitismo intestinal y las infecciones respiratorias, a través de una intervención educativa, cuyo proceso de e nseñanza aprendizaje también facilite generar cambios favorables en el hogar, comunidad y entorno ambiental.</div>
					<div class="mapa"><img src="{{ asset('img/mapa.jpg') }}"alt="Mapa" class="img-responsive"></div>
				</div>
				<div class="row no-margin">
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/impacto.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-10"><span>Impacto alcanzado: </span> El éxito del proceso educativo implementado, donde la actividad lúdica jugó un papel fundamental, facilitó que el 85% de los escolares ahora practiquen normas higiénicas saludables para prevenir  la diarrea, el parasitismo intestinal y las infecciones respiratorias, entre las que se destacan: el lavado de las manos antes de comer, antes y después de ir a la letrina, la disposición correcta de la basura y el consumo de agua segura.</div>
					<div class="anterior"><i class="glyphicon glyphicon-chevron-left left" data-position="second"></i></div>
					<div class="siguiente"><i class="glyphicon glyphicon-chevron-right right" data-position="second"></i></div>				
				</div>
			</div>

			<div class="align three">			
				<div class="clear"></div>
				<div class="titulother">Plan de Lucha contra la Lepra</div>
				<div class="row no-margin">
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/agencia.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-5"><span>Agencia de Cooperación:</span> Fundación Paul Émile Léger de Canadá y la Asociación Fontilles de España.</div>
					<div class="clear"></div>
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/fecha.png') }}" alt="Fecha" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-5"><span>Fecha de ejecución:</span>1 de Enero de 1994 al 30 de Diciembre de 1999.</div>
					<img src="{{ asset('img/fleger.png') }}" alt="Usaid" class="flegerlogo">
					<img src="{{ asset('img/fontilles.png') }}" alt="Usaid" class="fontilleslogo">
				</div>
				<div class="row no-margin">
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/ubicacion.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-11"><span>Ubicación: </span>  Zona Rural del municipio San Francisco Libre, departamento de Managua.</div>
					<div class="clear"></div>
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/poblacion.png') }}" alt="Agencia" class="img-responsive icono no-margin"></div>
					<div class="texto col-xs-10 no-margin col-md-5"><span>Población Beneficiaria: </span>  867 familias de 9 comunidades.</div>
					<div class="clear"></div>
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/objetivo.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-5"><span>Objetivo estratégico: </span>  Contribuir a disminuir de forma sostenible la transmisión de la Lepra hasta alcanzar su eliminación como problema de salud (conseguir menos de 1 caso x 10,000 habitantes) a través de la búsqueda activa de enfermos, la instauración oportuna del tratamiento según las normas establecidas por la Organización Mundial de la Salud (OMS) a fin de prevenir las discapacidades y el estricto seguimiento a cargo de los promotores de salud voluntarios adiestrados en la identificación de las manifestaciones clínicas.</div>
					<div class="mapa"><img src="{{ asset('img/mapa.jpg') }}"alt="Mapa" class="img-responsive"></div>
				</div>
				<div class="row no-margin">
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/impacto.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10"><span>Impacto alcanzado: </span>  Durante el periodo se lograron grandes avances en la lucha contra esta enfermedad, que junto a la Leishmaniosis cutánea y el Mal de Chagas históricamente han sido catalogadas como olvidadas. Las líneas de acción establecidas principalmente en la educación sanitaria, actuando sobre las grandes brechas entre la falta de información y la capacidad de respuesta de las familias y manera de prevenirla, además de posibilitar la incorporación del 70% de estas a las actividades de búsqueda intencionada, control de contactos y seguimiento a los enfermos bajo la coordinación de 18 promotores y promotoras de salud voluntarios capacitados en su identificación, en término social hizo posible la erradicación del estigma que le acompaña.</div>
					<div class="anterior"><i class="glyphicon glyphicon-chevron-left left" data-position="three"></i></div>
					<div class="anterior"><i class="glyphicon glyphicon-chevron-right right" data-position="three"></i></div>
				</div>
			</div>

			<div class="align four">			
				<div class="clear"></div>
				<div class="titulother titulfour">Desarrollo de Capacidades en Salud Materno Infantil, Mejora Nutricional, Enfermedades Olvidadas  y Salud Ambiental en 14 comunidades de Chinandega.</div>
				<div class="row no-margin">
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/agencia.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-5"><span>Agencia de Cooperación:</span> Generalitat Valenciana y la Asociación Fontilles de España.</div>
					<div class="clear"></div>
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/fecha.png') }}" alt="Fecha" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-5"><span>Fecha de ejecución:</span> 1 de septiembre del 2009 al 30 de diciembre del 2011.</div>
					<img src="{{ asset('img/geraliat.png') }}" alt="Usaid" class="flegerlogo geraliat">
					<img src="{{ asset('img/fontilles.png') }}" alt="Usaid" class="fontilleslogo">
				</div>
				<div class="row no-margin">
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/ubicacion.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-11"><span>Ubicación: </span>  Zona rural de los municipios Villa Nueva, Somotillo y Santo Tomás, departamento de Chinandega.</div>
					<div class="clear"></div>
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/poblacion.png') }}" alt="Agencia" class="img-responsive icono no-margin"></div>
					<div class="texto col-xs-10 no-margin col-md-5"><span>Población Beneficiaria: </span>1657 familias de 14 comunidades.</div>
					<div class="clear"></div>
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/objetivo.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10 col-md-5"><span>Objetivo estratégico: </span>  Contribuir al desarrollo por las familias de capacidades resolutivas en Salud Materna Infantil, Nutrición, Enfermedades Olvidadas (Lepra y Leishmaniosis cutánea) y Salud Ambiental, a través de estrategias de promoción y  prevención, acompañadas de intervenciones para mejorar la alimentación y el acceso al agua segura.</div>
					<div class="mapa"><img src="{{ asset('img/mapa.jpg') }}"alt="Mapa" class="img-responsive"></div>
				</div>
				<div class="row no-margin">
					<div class="col-md-1 col-xs-2"><img src="{{ asset('img/impacto.png') }}" alt="Agencia" class="img-responsive icono"></div>
					<div class="texto col-xs-10"><span>Impacto alcanzado: </span>  En la Salud Materna Infantil no hubo muertes que lamentar. Gracias a la transferencia exitosa de la estrategia Plan Parto Seguro implementada en proyectos anteriores, las 96 embarazadas captadas, sus parejas y familias desarrollaron capacidades en el auto cuidado e identificación de las señales de peligro en el embarazo  y el puerperio, cumplieron con todos los controles prenatales, y tuvieron un parto limpio y seguro en la unidad de salud más cercana. <br>En cuanto a la planificación familiar, las charlas y consejerías brindadas a las parejas sobre la negociación del uso de un método anticonceptivo, incrementó en un 15%  la demanda en los puestos de salud para la utilización de alguno de ellos. </div>
					<div class="anterior"><i class="glyphicon glyphicon-chevron-left left" data-position="four"></i></div>
				</div>
			</div>

		</div>
	</div>
</div>

@stop