<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield('titulo')</title>        
        <meta name="author" content="Norwin Guerrero Cruz @norwingc">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="keywords" content="">

         <!-- Twitter Card data -->
        <meta name="twitter:title" content="@yield('titulo')">
        <meta name="twitter:card" content="">
        <meta name="twitter:site" content="">

        <meta name="twitter:description" content="">
        <meta name="twitter:creator" content="">
        <meta name="twitter:image" content="">

        <!-- Open Graph data -->
        <meta property="og:title" content="@yield('titulo')" />
        <meta property="og:url" content="{{Request::url()}}" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="" />
        <meta property="og:description" content="" /> 
        <meta property="og:site_name" content="" />

        <!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		 
		{{ HTML::style('css/camera.css') }}
				
		{{ HTML::style('css/main.css') }}
	
		@yield('css')
	
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<header>
			@include('templates.__nav')

			<div class="slider">
				@yield('slider')				
			</div>
		</header>

		<section>
			@yield('contenido')
		</section>

		<div class="menuother">
		<div class="row no-margin">			
			<div class="col-md-2 col-md-offset-2">
				<img src="{{ asset('img/galeria.png') }}" alt="galeria" class="img-responsive">
				<p>Galeria</p>
			</div>
			<div class="col-md-2">
				<img src="{{ asset('img/proyectos.png') }}" alt="Proyectos" class="img-responsive">
				<p>Proyectos</p>
			</div>
			<div class="col-md-2">
				<img src="{{ asset('img/unete.png') }}" alt="Unete" class="img-responsive">
				<p>Unete</p>
			</div>
			<div class="col-md-2">
				<img src="{{ asset('img/contactenos.png') }}" alt="Contactenos" class="img-responsive">
				<p>Contactenos</p>
			</div>			
		</div>
	</div>

		<footer>
			@include('templates.__footer')
		</footer>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		
		{{ HTML::script('js/asset/jquery.stellar.js') }}
		{{ HTML::script('js/main.js') }}

		{{ HTML::script('js/plugin/jquery-migrate-1.2.1.min.js')}}
        {{ HTML::script('js/plugin/camera.min.js') }}
        {{ HTML::script('js/plugin/jquery.mobile.customized.min.js') }}
        {{ HTML::script('js/plugin/jquery.easing.1.3.js') }}
		
		
			
		<script type="text/javascript">
			if($(window).width() < 760){
                jQuery('.camera_wrap').camera({ 
                    height: '250px',
                    pagination: false,
                    navigation: false,
                    playPause: false,
                    loader: false               
                });
            }else if($(window).width() > 760 && $(window).width() < 1024){
                jQuery('.camera_wrap').camera({ 
                    height: '350px',
                    pagination: false,
                    navigation: true,
                    playPause: true,
                    loader: 'pie'                
                });
            }else if ($(window).width() >= 1024 && $(window).width() < 1300){
                jQuery('.camera_wrap').camera({ 
                    height: '450px',
                    pagination: false,
                    navigation: true,
                    playPause: true,
                    loader: 'pie'                 
                });
            }else if ($(window).width() >= 1300 && $(window).width() < 1400){
            	  jQuery('.camera_wrap').camera({ 
                    height: '550px',
                    pagination: false,
                    navigation: true,
                    playPause: true,
                    loader: 'pie'                 
                });
            }else{
            	 jQuery('.camera_wrap').camera({ 
                    height: '600px',
                    pagination: false,
                    navigation: true,
                    playPause: true,
                    loader: 'pie'                 
                });
            }

            $(window).stellar(); 
		</script>		


		@yield('js')	
	</body>
</html>
        