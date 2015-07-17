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

		<footer>
			@include('templates.__footer')
		</footer>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		
		{{ HTML::script('js/asset/jquery.stellar.js') }}
		{{ HTML::script('js/main.js') }}

		@yield('js')	
	</body>
</html>
        