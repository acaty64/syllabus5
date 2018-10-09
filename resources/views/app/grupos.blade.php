@extends('layouts.app')

@section('title','Grupos')

@section('content')
        <table style="width:50%" align="center">
          <tr  style="border-style: solid;">
            <th>Código</th>
            <th>Grupo</th>
            <th>Acción</th>
          </tr>
            {{ csrf_field() }}
            @foreach($data as $fila)
                <tr style="border-style: solid;">
                    <td>{{ $fila->cod_grupo }}</td>
                    <td>{{ $fila->wgrupo }}</td>
                    <td>
                        <a href="{{ route('cursogrupo.index', [$fila->cod_grupo]) }}" class="btn btn-success" data-toggle="tooltip" title="Syllabus" name = "{{'cursogrupo'.$fila->cod_grupo}}"><span class="glyphicon glyphicon-expand" aria-hidden='true'></span></a>
                    </td>
                </tr>
            @endforeach
        </table>
@endsection

@section('js')

@endsection

@section('view','app/grupos.blade.php')

