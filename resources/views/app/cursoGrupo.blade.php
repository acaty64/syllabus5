@extends('layouts.app')

@section('title','Cursos')

@section('content')
    <h1 class="text-center">{{ $titulo_pagina }}</h1>
    <p class="text-center" style="color:{{ $mensaje['color'] }}">{{ $mensaje['texto'] }}</p>
    <table style="width:80%" align="center">
      <tr  style="border-style: solid;">
        <th class="text-center">Código</th>
        <th class="text-center">Grupo</th>
        <th class="text-center">Acción</th>
        <th class="text-center">Status</th>
      </tr>
        {{ csrf_field() }}
        @foreach($data as $fila)
            <tr style="border-style: solid;">
                <td>{{ $fila->cod_curso }}</td>
                <td>{{ $fila->wcurso }}</td>
                <td>
                    @if( $mensaje['color'] == 'green' )
                        <a href="{{ route( 'syllabus.show', [
                            'semestre'=>env('SEMESTRE'), 
                            'cod_curso'=>$fila->cod_curso, 
                            'edit'=>true] ) }}" 
                            class="btn btn-success" 
                            data-toggle="tooltip" 
                            title="Ver o Editar Syllabus" 
                            name = "{{'curso'.$fila->cod_curso}}">
                            <span class="glyphicon glyphicon-pencil" aria-hidden='true'></span>
                        </a>
                    @endif
                    <a href="{{ route( 'consistencia.show', [
                        'curso_id'=>$fila->curso_id] ) }}" 
                        class="btn btn-success" 
                        data-toggle="tooltip" 
                        title="Consistencia" 
                        name = "{{'consistencia'.$fila->cod_curso}}">
                        <span class="glyphicon glyphicon-check" aria-hidden='true'></span>
                    </a>
                </td>
                <td>
                    @if($fila->curso->consistencia_boolean)
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

@section('view','app/cursoGrupo.blade.php')

