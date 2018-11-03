@extends('layouts.app')
@section('title','')

@section('content')
	<h3 class="text-center">{{ $titulo_pagina }}</h3>
	<table style="width:80%" align="center">
      <tr  style="border-style: solid;">
        <th class="text-center" style="width:15%">Item</th>
        <th class="text-center" style="width:85%">Mensaje</th>
      </tr>
		@foreach($data as $fila)
			<tr style="border-style: solid;">
				<td>{{  $fila['campo']  }}</td>
				<td>{{  $fila['texto']  }}</td>
			</tr>
		@endforeach
	</table>
@endsection

@section('js')

@endsection

@section('view','app/consistencia.blade.php')
