<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title','default')</title>
	<!--link href="css/estilos_pdf.css" rel="stylesheet" type="text/css" -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	@yield('css')
</head>
<body class='body'>
	<div id="app">
		<div class='titulo'>@yield('title')</div>
		<div class='contenido'>
				@yield('content')
		</div>
		<!--footer class='footer'>
			@yield('template.partials.footer_PDF')
		</footer-->
	</div>
	    <!-- Scripts -->
	    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
