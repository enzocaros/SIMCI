<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>SIMCI</title>
		
		<link rel="stylesheet" type="text/css" href="/semantic/semantic.min.css">
		<link rel="stylesheet" type="text/css" href="/css/formulario_inicio_sesion.css">
	</head>
	
	<body>
		
		<div class="ui attached stackable menu">
		  	<div class="ui container">
		    	<a class="item"><i class="home icon"></i> SIMCI</a>
		    	<div class="right item">
		    	<div class="ui input"><input type="text" placeholder="Search..."></div>
		    	</div>
		  	</div>
		</div>
		

		<div class="ui two column doubling stackable grid container">
			<div class="ui one column centered grid">
				<div class="column">
					<div class="formulario" id="inicio_sesion">
				    	<div class="ten wide column">
						  	<div class="column">
						  		<div class="ui blue message">
						  			<div align="center"><p style="font-size:18px">Inicio Sesion</p></div>
						  			@if(isset($mensaje_error))
						  				<div class="ui error message">{{$mensaje_error}}</div>
						  			@endif

						  		</div>
						  		

			   			    	<form class="ui form" id="form-inicio-sesion" action="/usuarios/login" method="POST">
						      		<div class="field">
						        		<label>Usuario</label>
						        		<div class="ui left icon input">
						          			<input type="text" placeholder="Usuario" id="usuario-login" name="usuario">
						          			<i class="user icon"></i>
						        		</div>
						      		</div>
						      	
							      	<div class="field">
							        	<label>Password</label>
							        	<div class="ui left icon input">
							          		<input type="password" placeholder="Password" id="password-login" name="password">
							          		<i class="lock icon"></i>
							        	</div>
							      	</div>


      								<button class="large ui right floated blue submit button"  id="btn-inicio-sesion">Login</button>
      								<div class="large ui right floated submit buttonui reset button">Reset</div>

						      		<div class="ui error message"></div>
						    	</form>
						 	</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="/js/jquery.min.js"></script>
		<script src="/semantic/semantic.min.js"></script>	
		<script src="/js/scripts_formularios.js"></script>

		<script>
		$(document).ready(function(){
			
			$('.ui.form').form(reglas_formulario_login);

			
			
		});
		</script>
		
	</body>
</html>