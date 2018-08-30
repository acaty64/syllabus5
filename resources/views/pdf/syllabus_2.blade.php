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
<body>	
	<table>
		<thead>
	        <tr>
	            <th width="10%"></th>
	            <th width="15%"></th>
	            <th width="15%"></th>
	            <th width="10%"></th>
	            <th width="15%"></th>
	            <th width="10%"></th>
	            <th width="15%"></th>
	            <th width="10%"></th>
	        </tr>			
		</thead>
		<tbody>	
			@foreach($lineas as $linea)
				{!! $linea['html'] !!}
			@endforeach
		</tbody>
	</table>
</body>
