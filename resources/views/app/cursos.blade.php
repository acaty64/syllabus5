@extends('layouts.app')

@section('title','Cursos')

@section('content')
    <h1 class="text-center">{{ $titulo_pagina }}</h1>
    <table style="width:60%" align="center">
      <tr  style="border-style: solid;">
        <th>Código</th>
        <th>Curso</th>
        <th>Acción</th>
      </tr>
        {{ csrf_field() }}
        @foreach($data as $fila)
            <tr style="border-style: solid;">
                <td>{{ $fila->cod_curso }}</td>
                <td>{{ $fila->wcurso }}</td>
                <td>
                    <a href="{{ route('PDF', [env('SEMESTRE'), $fila->cod_curso, 'screen', true]) }}" target="_blank" id="PDFview_{{ $fila->id }}" class="btn btn-success" data-toggle="tooltip" title="PDF view"><span class="glyphicon glyphicon-fullscreen" aria-hidden='true'></span></a>
                    <a href="{{ route('PDF', [env('SEMESTRE'), $fila->cod_curso, 'download', true]) }}" id="PDFdown_{{ $fila->id }}" class="btn btn-success" data-toggle="tooltip" title="PDF download"><span class="glyphicon glyphicon-download-alt" aria-hidden='true'></span></a>
                    <a href="{{ route('curso.show', [env('SEMESTRE'), $fila->cod_curso, true]) }}" id="view_{{ $fila->id }}" class="btn btn-success" data-toggle="tooltip" title="Syllabus"><span class="glyphicon glyphicon-play-circle" aria-hidden='true'></span></a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="pages">
        {{ $data->links() }}
    </div>
@endsection

@section('style')
    <style>
        th {
            text-align: center;
        }
        .pages {
            text-align: center;
        }
    </style>
@endsection

@section('view','app/cursos.blade.php')

