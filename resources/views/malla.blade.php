@extends('layouts.app')

@section('title','Malla')

@section('content')
        <table style="width:50%" align="center">
          <tr  style="border-style: solid;">
            <th>Ciclo 1</th>
            <th>Ciclo 2</th>
            <th>Ciclo 3</th>
            <th>Ciclo 4</th>
            <th>Ciclo 5</th>
            <th>Ciclo 6</th>
            <th>Ciclo 7</th>
            <th>Ciclo 8</th>
            <th>Ciclo 9</th>
            <th>Ciclo 10</th>
          </tr>
            @foreach($data as $fila)
                <tr style="border-style: solid;">
                @foreach($fila as $key)
                    @if($key['cod_curso'] != '')
                        <td align="center">
                            <form method="GET" action="{{ url('/show/'.$semestre.'/'.$key['cod_curso']) }}">
                                {{ csrf_field() }}
                                    <button class="btn btn-sm btn-primary" title="{{ $key['wcurso'] . chr(13) . 'PreReq: ' . $key['wprereq'] }}" type="submit">
                                    {{ $key['cod_curso'] }}</button>
                            </form>
                        </td>
                    @else
                        <td align="center"></td>                    
                    @endif
                @endforeach
                </tr>
            @endforeach
        </table>
@endsection

@section('js')

@endsection

@section('view','app/malla.blade.php')

