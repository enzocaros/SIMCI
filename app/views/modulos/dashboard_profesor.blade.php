@extends('layouts.plantilla_master')

@section('titulo')
	<title>SIMCI - Profesor</title>
@stop

@section('contenido-body-master')
	
	<header>
  		<div class="ui fixed menu">
    		<div class="ui container">
    			<a href="#" class="header item">
        			<img class="logo" src="/img/logo.png">
        			&nbsp;&nbsp;&nbsp;SIMCI
      			</a>
      			
      			<div class="right menu">
      				<a class="item">
      					Notificaciones
      					<div class="ui red label">10</div>
      				</a>
			      	<div class="ui simple dropdown item">
	  					{{-- ucfirst(Auth::user()->usuario )--}}	
				     	<i class="dropdown icon"></i>
				      	<div class="menu">
				        	<a class="item" href="/autenticacion/logout"><i class="settings icon"></i>Salir</a>
				      	</div>
				    </div>
				</div>
    		</div>
		</div>
	</header>


	<div class="ui left vertical inverted labeled icon sidebar menu" id="menu-administracion">
		<a class="item" href="#">
  			<i class="home icon"></i>
  			Inicio
		</a>
	
		<a class="item" ng-href="#/usuarios">
  			<i class="user layout icon"></i>
  			Usuarios
		</a>
	
    	<a class="item" ng-href="#/reporte">
	      	<i class="file text outline icon"></i>
	      	Reportes
    	</a>

    	<a class="item" ng-href="#/laboratorio">
	      	<i class="lab icon"></i>
	      	Laboratorios
    	</a>
	</div>

	<!-- Boton para abrir el menu -->
	<div class="ui animated fade big launch button" id="btn-abrir-menu">
		<div class="hidden content">
			Menu
		</div>
		<div class="visible content">
			<i class="sidebar icon"></i>
		</div>
	</div>
	
	<div class="ui container espacio_buttom">
		<div ng-view>
			<!--<div class="ui container">
			  <div class="ui active inverted dimmer">
			    <div class="ui large text loader">Cargando</div>
			  </div>
			</div>-->
		</div>
	</div>
	
	<div class="ui bottom fixed menu barra_inferior">
	  	<div class="item right">
	  		<a class="ui teal tag label">
	  			<span id="reloj">0:00:00</span>
	  		</a>
		</div>
	</div>
  	
@stop

@section('js')
	<script>
		$(document).ready(function(){

			$("#btn-abrir-menu").click(function(){
		    	$('#menu-administracion')
		    	.sidebar({
		    		transition:'overlay',
		    		dimPage: false,
		    		context: 'body',
		    	})
		    	.sidebar('toggle');
		  	});
		});
	</script>
@stop
	