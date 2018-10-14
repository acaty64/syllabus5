@extends('layouts.app')

@section('title','Malla')

@section('content')
    <nav class="navbar navbar-default navbar-left">    
        <ul class="siglas">
            <li class="siglas"><a href="{{ route('malla', ['adm']) }}">Administración</a></li>
            <li class="siglas"><a href="{{ route('malla', ['con']) }}">Contabilidad</a></li>
            <li class="siglas"><a href="{{ route('malla', ['eco']) }}">Economía</a></li>
            <li class="siglas"><a href="{{ route('malla', ['neg']) }}">Adm. y Negocios Internacionales</a></li>
            <li class="siglas"><a href="{{ route('malla', ['fin']) }}">Cont. y Finanzas</a></li>
        </ul>
    </nav>
    <nav class="navbar navbar-default navbar-right">
        <form action="{{ route('PDF.malla', [$especialidad]) }}">
            <button class="btn-sm" type="submit">
                Ver PDF malla <br>{{ strtoupper($especialidad) }}
            </button>
        </form>
    </nav>    
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

@section('style')
<style>        
    ul.siglas {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333333;
    }

    li {
        float: left;
    }
    .siglas {
            float: left;
        }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 10px;
        text-decoration: none;
    }
    .siglas{
            display: block;
            color: white;
            text-align: center;
            padding: 10px;
            text-decoration: none;
        }

    li a:hover {
        background-color: #111111;
    }
    .siglas:hover {
            background-color: #111111;
        }
</style>
@endsection

@section('view','app/malla.blade.php')

