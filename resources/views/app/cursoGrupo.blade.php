@extends('layouts.app')

@section('title','Cursos')

@section('content')
    <h1 class="text-center">{{ $titulo_pagina }}</h1>
    <table style="width:50%" align="center">
      <tr  style="border-style: solid;">
        <th>Código</th>
        <th>Grupo</th>
        <th>Acción</th>
      </tr>
        {{ csrf_field() }}
        @foreach($data as $fila)
            <tr style="border-style: solid;">
                <td>{{ $fila->cod_curso }}</td>
                <td>{{ $fila->wcurso }}</td>
                <td>
                    <a href="{{ route('curso.show', [env('SEMESTRE'), $fila->cod_curso]) }}" class="btn btn-success" data-toggle="tooltip" title="Syllabus" name = "{{'curso'.$fila->cod_curso}}"><span class="glyphicon glyphicon-expand" aria-hidden='true'></span></a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('js')

@endsection

@section('view','app/cursoGrupo.blade.php')

