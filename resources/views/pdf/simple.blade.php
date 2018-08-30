<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"-->
	<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>Ejemplo</title>
</head>
<body class='body'>
	<div class='titulo1'>
		Esta es una pagina simple sin js 
		con css en la misma pagina
	</div>
	<?php for($i = 1; $i <= 5; $i++){ ?>
		{{ $i }}
	<?php } ?>

    <style>
	    .titulo0 {
	        font-size: 25px;
	        font-weight: bold;
	    }
	    .titulo1 {
	        font-size: 15px;
	        font-weight: bold;
	        margin-top: 20px;
	    }
	    .unidades {
	        border: 1px solid black;
	    }

	    .col-2.titulo3, .col-3.titulo3,  .col-4.titulo3,  .col-6.titulo3, 
	    .col-2.contenidos, .col-3.contenidos, .col-4.contenidos,  .col-6.contenidos,
	    .col-3.generales, .col-2.bibliografias,
	    .col-2.unidades, .col-3.unidades, .col-4.unidades,
	    .col-2.bibliografias, .col-3.bibliografias, .col-4.bibliografias, .col-5.bibliografias, .col-6.bibliografias,
	    .col-2.evaluaciones, .col-3.evaluaciones, .col-4.evaluaciones
	    {
	        margin-left: 0px;
	    }

	    .examenes {
	        border: 0.5px solid black;
	    }
	</style>
</body>
</html>
