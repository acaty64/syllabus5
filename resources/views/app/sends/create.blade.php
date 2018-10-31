@extends('layouts.app')

@section('title','Crear Nueva Comunicación')

@section('content')
    <h1 class="text-center">{{ $titulo_pagina }}</h1>
    <form action={{ route('send.store') }} method="POST">
        {{ csrf_field() }}
        <table style="width:50%" align="center"> 
            <tr>
                <th style="width: 20%"></th>
                <th style="width: 40%"></th>
                <th style="width: 10%"></th>
            </tr>
            <tr>
                <td><label for="flimite" >Fecha límite</label></td>
                <td>
                    <select name="flimite">
                        <option value={{ \Carbon\Carbon::now()->addDay() }}>{{ \Carbon\Carbon::now()->addDay()->Format('d  M  Y') }}</option>
                        <option value={{ \Carbon\Carbon::now()->addWeek() }}>{{ \Carbon\Carbon::now()->addWeek()->Format('d  M  Y') }}</option>
                    </select>
                </td>            
            </tr>       
        </table>
        <table style="width:80%" align="center">
            <tr>
                <th style="text-align:center; width: 30%">Nombre</th>
                <th style="text-align:center; width: 30%">e-mail</th>
                <th style="text-align:center; width: 30%">Grupo</th>
                <th style="text-align:center; width: 10%">Comunicar</th>
            </tr>
            @foreach($data as $fila)
                <tr>
                    <td>{{ $fila->user->name }}</td>
                    <td>{{ $fila->user->email }}</td>
                    <td>{{ $fila->grupo->wgrupo }}</td>
                    <td align="center"><input type="checkbox" id="userGrupo_{{ $fila->grupo->id }}" name="userGrupo_{{ $fila->grupo->id }}" value=true></td>
                </tr>
            @endforeach
        </table>
        <br><br>
        <table style="width:10%" align="center">
            <tr>
                <td align="center">
                    <button type="submit" class="btn btn-success grabar">Grabar Comunicación</button>
                </td>         
            </tr>
        </table>
    </form>

@endsection

@section('js')

@endsection

@section('view','app/send/create.blade.php')
