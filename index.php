<?php
	session_start();

	if (isset($_SESSION['is_logged_in'])) {
		header('Location: dashboard.php');
		exit;
	}
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Iniciar sesión</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/styles.css">
</head>

<body>
	<div class="jumbotron jumbotron-fluid">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h2 class="text-center text-bold">Compu Mundo Hiper Mega Red</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">Iniciar Sesión</div>
					<div class="panel-body">
						<div class="row">
							<form id="form-login" method="POST">
								<div class="form-group">
									<label for="user" class="col-md-3 mb-3">Usuario:</label>
									<div class="col-md-9 mb-3">
										<input type="text" id="user" name="user" class="form-control" placeholder="Ingrese el su nombre de usuario" required autocomplete="off" autofocus="true">
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="col-md-3 mb-3">Contraseña:</label>
									<div class="col-md-9 mb-3">
										<input type="password" id="password" name="password" class="form-control" placeholder="Ingrese su contraseña" required>
									</div>
								</div>
								<div class="col-md-9 col-md-offset-3">
									<button type="submit" id="btn-login" class="btn btn-default"><span class="glyphicon glyphicon-lock"></span> Entrar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
	<script type="module" src="public/js/auth.js"></script>
</body>

</html>