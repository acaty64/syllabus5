@extends('layouts.app')
@section('title','Download')

@section('content')
	<h1 class="text-center">{{ $titulo_pagina }}</h1>
	<input id="url_proceso" type="hidden" value="{{ $url_proceso }}"></input>
	<input id="cod_grupo" type="hidden" value="{{ $data_route['cod_grupo'] }}"></input>
	<input id="message" type="hidden" value="{{ $data_route['message'] }}"></input>
	{{ csrf_field() }}
	<input id="zipFile" type="hidden" value="{{ $zipFile }}"></input>
	<div class="container panel panel-default">
		<div class="panel-body">
			<div class="row">
				<div class="progress">
				  <div id="barra-progreso" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
				  <span class="sr-only">0% Complete</span>
				</div>
			</div>
			<div class="row">
				<button id="proceso" class="btn btn-default">
					Iniciar Descarga
				</button>
				<a id='back' href="{{ URL::previous() }}">Anterior</a>
			</div>
		</div>
	</div>

@endsection

@section('js')
<script type="text/javascript">

//	$document.ready(function () {
	$('#proceso').click(function (){
//console.log('#data_route', document.getElementById("data_route").value);
		var url_proceso = document.getElementById("url_proceso").value;
		var siglas = document.getElementById("cod_grupo").value;
		var mensaje = document.getElementById("message").value;
		var token = document.getElementsByName("_token")[0].value;

//console.log('data', url_proceso);
		$('#barra-progreso').progressBar({
			url: url_proceso,
			//url: '/proceso.php',
			cod_grupo: siglas,
			message: mensaje,
			_token: token,
			progressUrl: '/progreso.txt',
			trigger: '#proceso',
			back: '#back',
			finished: function () {
				var zipFile = document.getElementById("zipFile").value;
				window.location.assign("{{route('download.file', [$zipFile, 'zip'])}}");
				//alert("El proceso ha finalizado")
			},
		});
	}());
//	});
</script>
@endsection

@section('jquery')
<script type="text/javascript">
	/* https://www.youtube.com/watch?v=vg7hMshlZAw&t=1089s */
	$('#barra-progreso').change(function (win, doc, $, _und ){
		$.fn.progressBar = function (oConfig) {
			var _oConfig, _iniciarProceso, 
				_mostrarProgreso, _getProgreso,
				_bIniciado = false, _bFinalizado = false;

			/** 
			 * Variable de configuracion
			 * @var {Object} Parametros de configuracion del plugin 
			 */
			_oConfig = $.extend({
				trigger: "#progress-trigger",
				back: '#back',
				progressBar: $(this),
				url: _und,
				cod_grupo: _und,
				message: _und,
				_token: _und,
				progressUrl: '/progreso.txt',
				finished: function () { return false; }
			}, oConfig);

			/** 
			 * Iniciar el proceso
			 */
			_iniciarProceso = function (argument) {
				_bIniciado = true;
				_bFinalizado = false;
				// Deshabilita boton
				$(_oConfig.trigger).prop("disabled", true);
				$(_oConfig.back).prop("hidden", true);
				// Llamada a Ajax
				$.ajax({
					url: _oConfig.url,
					data: { cod_grupo: _oConfig.cod_grupo, 
							message: _oConfig.message
						},
					type: "POST",
					success: function (result,status,xhr) {
						_mostrarProgreso(100);
						_bFinalizado = true;
						_oConfig.finished();
						// Habilita boton
						$(_oConfig.trigger).prop("disabled", false);
						$(_oConfig.back).prop("hidden", false);
					},
				});
				_getProgreso();
			};

			/** 
			 * Mostrar el progreso
			 * @param {Number} nPorcentaje Porcentaje de 0 a 100
			 */
			_mostrarProgreso = function (nPorcentaje) {
				var oProgressBar = _oConfig.progressBar;

				oProgressBar.css("width", nPorcentaje + "%");
				oProgressBar.text(nPorcentaje + "%");
				oProgressBar.attr("aria-valuenow", nPorcentaje + "%");				
				oProgressBar.attr("aria-valuemin", "10%");
				oProgressBar.attr("aria-valuemax", "100%");
			};

			/** 
			 * Obtiene el progreso del servidor y lo muestra en la barra
			 * @param {Number} nPorcentaje Porcentaje de 0 a 100
			 */
			_getProgreso = function (argument) {
				// llamada a AJAX
				$.ajax({
					url: _oConfig.progressUrl,
					success: function ($Data) {
						var nProgreso = parseInt($Data, 10);
						if ($Data == "finish" || _bIniciado) {
							nProgreso = 0;
							_bIniciado = false;
						}
						if(_bFinalizado) {
							nProgreso = 100;
						}
						_mostrarProgreso(nProgreso);
						if(nProgreso < 100){
							setTimeout( _getProgreso, 100);
						}
					},
					error: function () {
						setTimeout( _getProgreso, 100);
					},
				});
			}; 			

			/** 
			 * Eventos
			 */
			$(doc).on('click', _oConfig.trigger, function (argument) {
				 _iniciarProceso();
			});
		};
	}(window, window.document, jQuery))
	
</script>
@endsection

@section('style')
<style>
	body {
		background: #C3CFEB;
	}
	#back {
		float: right;
	}
</style>
@endsection

@section('view','app/download.blade.php')
