@extends('layouts.app')

@section('title','Comunicados')

@section('content')
    <h1 class="text-center">{{ $titulo_pagina }}</h1>
    <table style="width:50%" align="center">
        {{ csrf_field() }}
        <tr>
            <p style="text-align:center;">
                <a href="{{ route('send.create') }}" class="btn btn-success crear" data-toggle="tooltip">Crear Comunicación</a>
            </p>
        </tr>
    </table>    
    <table style="width:80%" align="center">
      <tr  style="border-style: solid;">
        <th>Receptor</th>
        <th>F.Envío</th>
        <th>F.Límite</th>
        <th>F.Rpta</th>
        <th>Cursos</th>
        <th>No Verificados</th>
        <th>Verificados</th>
        <th>Abiertos</th>
        <th>Cerrados</th>
      </tr>
        @foreach($data as $fila)
            <tr style="border-style: solid;">
                <td>{{ $fila->user->name }}</td>
                <td>{{ $fila->date_send }}</td>
                <td>{{ $fila->date_answer }}</td>
                <td>{{ $fila->date_response }}</td>
                <td style="text-align:center;">{{ $fila->ncursos }}</td>
                <td style="text-align:center;">{{ $fila->ncursos - $fila->nchecks }}</td>
                <td style="text-align:center;">{{ $fila->nchecks }}</td>
                <td style="text-align:center;">{{ $fila->nstatus }}</td>
                <td style="text-align:center;">{{ $fila->ncursos - $fila->nstatus }}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('js')

@endsection

@section('view','app/send/index.blade.php')

