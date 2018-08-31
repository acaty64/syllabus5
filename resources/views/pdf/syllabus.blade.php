<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>En construccion</title>
</head>
<body class='body'>
	<div class="container">
		@foreach($lineas as $linea)
			{!! $linea['html'] !!}
		@endforeach
	</div>
<style>
	.body {
		margin-left: 10%;
		background-color: white;
	}

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
    .col-3.generales,
    .col-2.unidades, .col-3.unidades, .col-4.unidades,
    .col-3.evaluaciones, .col-4.evaluaciones, .col-5.evaluaciones,
    .col-2.bibliografias, .col-3.bibliografias 
    {
        margin-left: 0px;
    }
/*
	.col-1 { width: 10%; }
	.col-2 { width: 15%; }
	.col-3 { width: 15%; }
	.col-4 { width: 15%; }
	.col-5 { width: 15%; }
	.col-6 { width: 10%; }
	.col-7 { width: 10%; }
	.col-8 { width: 10%; }

	.col-xs-2 { column-span: 2; }
	.col-xs-3 { column-span: 3; }
	.col-xs-4 { column-span: 4; }
	.col-xs-5 { column-span: 5; }
	.col-xs-6 { column-span: 6; }
	.col-xs-7 { column-span: 7; }
	.col-xs-8 { column-span: 8; }
*/
    .examenes {
        border: 0.5px solid black;
    }
</style>
