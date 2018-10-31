@extends('layouts.app')

@section('title','Comunicados')

@section('content')
    <h1 class="text-center">{{ $titulo_pagina }}</h1>
    <table style="width:50%" align="center">
        <tr>
            <p style="text-align:center;">
                <a href="{{ route('sends.create') }}" class="btn btn-success" data-toggle="tooltip">Crear Comunicación</a>
            </p>
        </tr>
    </table>    
    <table style="width:50%" align="center">
      <tr  style="border-style: solid;">
        <th>Receptor</th>
        <th>Fecha de envío</th>
        <th>Fecha límite</th>
        <th>Fecha de respuesta</th>
        <th>Cursos</th>
        <th>No Verificados</th>
        <th>Verificados</th>
        <th>Abiertos</th>
        <th>Cerrados</th>
      </tr>
        {{ csrf_field() }}
        @foreach($data as $fila)
            <tr style="border-style: solid;">
                <td>{{ $fila->name }}</td>
                <td>{{ $fila->date_send }}</td>
                <td>{{ $fila->date_answer }}</td>
                <td>{{ $fila->date_response }}</td>
                <td>{{ $fila->ncursos }}</td>
                <td>{{ $fila->ncheck_ko }}</td>
                <td>{{ $fila->ncheck_ok }}</td>
                <td>{{ $fila->nstatus_open }}</td>
                <td>{{ $fila->nstatus_close }}</td>
                <!--td>
                    @if($type == 'show')
                        <a href="{{ route('cursogrupo.index', [$fila->cod_grupo]) }}" class="btn btn-success" data-toggle="tooltip" title="Syllabus" name = "{{'cursogrupo'.$fila->cod_grupo}}"><span class="glyphicon glyphicon-expand" aria-hidden='true'></span></a>
                    @else
                        <a href="{{ route('downloadGrupo', [$fila->cod_grupo]) }}" class="btn btn-success" data-toggle="tooltip" title="Syllabus" name = "{{'cursogrupo'.$fila->cod_grupo}}"><span class="glyphicon glyphicon-download-alt" aria-hidden='true'></span></a>
                    @endif
                </td-->
            </tr>
        @endforeach
    </table>
@endsection

@section('js')

@endsection

@section('view','app/grupos.blade.php')

