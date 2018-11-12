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
        <th>Id</th>
        <th>Receptor</th>
        <th>F.Envío</th>
        <th>F.Límite</th>
        <th>Cursos</th>
        <th>Incompletos</th>
        <th>Completos</th>
        <th>Abiertos</th>
        <th>Cerrados</th>
        <th>Acción</th>
      </tr>
        @foreach($data as $fila)
            <tr style="border-style: solid;">
                <td>{{ $fila->id }}</td>
                <td>{{ $fila->user->name }}</td>
                <td>{{ $fila->date_send }}</td>
                <td>{{ $fila->date_answer }}</td>
                <td style="text-align:center;">{{ $fila->ncursos }}</td>
                <td style="text-align:center;">{{ $fila->ncursos - $fila->nchecks }}</td>
                <td style="text-align:center;">{{ $fila->nchecks }}</td>
                <td style="text-align:center;">{{ $fila->nstatus }}</td>
                <td style="text-align:center;">{{ $fila->ncursos - $fila->nstatus }}</td>
                <td align="center">
                    <a href="{{ route('send.destroy', $fila->id) }}" class="btn btn-danger" data-toggle="tooltip" title="Eliminar" ><span class="glyphicon glyphicon-remove" aria-hidden='true'></span></a>            
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('style')
<style>
    th{
        text-align: center;
    }
</style>

@endsection

@section('view','app/send/index.blade.php')

