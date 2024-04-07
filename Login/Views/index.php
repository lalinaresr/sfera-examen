<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio de Sesíon - Sfera</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../Resources/css/estilos.css">
</head>
<body>	
	<header class="header">
		<strong class="texto-encabezado">Compu Mundo Hiper Mega Red</strong>
	</header><br>

	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">Iniciar Sesión</div>                    
					<div class="panel-body">                     
						<form role="form" method="post">
							<table class="table">
								<tr>
									<th colspan="2"><strong class="texto-relleno">Por Favor Ingrese Sus Datos</strong></th>
								</tr>
								<tr>
									<td><label for="usuario">Usuario:</label></td>
									<td>
										<input type="text" id="usuario" name="usuario" class="form-control" placeholder="Teclee su Usuario.." autocomplete="off">
									</td>
								</tr>
								<tr>
									<td><label for="contrasena">Contraseña:</label></td>
									<td>
										<input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="Teclee su Contraseña.." autocomplete="off">
									</td>
								</tr>
								<tr>
									<td></td>
									<td><button type="button" class="btn btn-default " onclick="iniciarSesion();"><span class="glyphicon glyphicon-lock"></span> Entrar</button></td>
								</tr>
							</table>                                          
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade bs-example-modal-sm" id="myModalAviso"  tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header" id="modal-encabezado">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"></h4>
				</div>
				<div class="modal-body" id="modal-cuerpo">
					<p id="aviso"></p>
				</div>
				<div class="modal-footer" id="modal-pie">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- Archivo Js donde Validaremos los Campos y haremos enlace con el Archivo PHP para Consultar a la BD -->
	<script type="text/javascript" src="../Controllers/principal.js" charset="UTF-8"></script>
</body>
</html>