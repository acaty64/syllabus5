<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Ejemplo</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class='body'>
	<div id="app">
		<example-component></example-component>
	</div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
