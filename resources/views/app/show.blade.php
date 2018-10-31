@extends('layouts.app')

@section('title','Syllabus')
@section('content')
	<syllabus-component semestre={{ $semestre }} cod_curso={{$cod_curso}} edit={{ $edit }} user_id={{ \Auth::id() }} ></syllabus-component>
@endsection

@section('js')

@endsection

@section('view','app/show.blade.php')
