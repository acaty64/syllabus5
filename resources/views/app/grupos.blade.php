@extends('layouts.app')

@section('title','Grupos')

@section('content')
    <h1 class="text-center">{{ $titulo_pagina }}</h1>
    <table style="width:50%" align="center">
      <tr  style="border-style: solid;">
        <th>Código</th>
        <th>Grupo</th>
        <th>Acción</th>
        <th>Status</th>
      </tr>
        {{ csrf_field() }}
        @foreach($data as $fila)
            <tr style="border-style: solid;">
                <td>{{ $fila->cod_grupo }}</td>
                <td>{{ $fila->wgrupo }}</td>
                <td>
                    @if($type == 'show')
                        <a href="{{ route('cursogrupo.index', [$fila->cod_grupo]) }}" class="btn btn-success" data-toggle="tooltip" title="Syllabus" name = "{{'cursogrupo'.$fila->cod_grupo}}"><span class="glyphicon glyphicon-expand" aria-hidden='true'></span></a>
                    @else
                        <a href="{{ route('downloadGrupo', [$fila->cod_grupo]) }}" class="btn btn-success" data-toggle="tooltip" title="Syllabus" name = "{{'cursogrupo'.$fila->cod_grupo}}"><span class="glyphicon glyphicon-download-alt" aria-hidden='true'></span></a>
                    @endif
                </td>
                <td>
                    @if($fila->consistencia)
                        <p style="color: green">Completo</p>
                    @else
                        <p style="color: red">Incompleto</p>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('js')

@endsection

@section('view','app/grupos.blade.php')

