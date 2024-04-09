<?php
	session_start();
	
	if (!isset($_SESSION['is_logged_in'])) {
		header('Location: index.php');
		exit;
	}
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienvenido</title>
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
			<div class="col-md-2">
				<button class="btn btn-default btn-sm btn-block"><span class="glyphicon glyphicon-home"></span> Inicio</button>
				<button class="btn btn-default btn-sm btn-block"><span class="glyphicon glyphicon-user"></span> Perfil</button>
				<button class="btn btn-default btn-sm btn-block"><span class="glyphicon glyphicon-cog"></span> Ajustes</button>
				<button id="btn-logout" class="btn btn-default btn-sm btn-block"><span class="glyphicon glyphicon-off"></span> Salir</button>
			</div>
			<div class="col-md-8">
				<span style="font-size: 3rem !important;" class="text-center">Bienvenido: <span id="data-username"></span></span>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo cum doloremque sunt! Quasi corporis eaque ratione possimus laborum repellat non doloribus vero neque magnam aperiam excepturi adipisci dicta, eum sequi dolorum animi. Dicta officiis corrupti unde, dolor veniam reprehenderit natus tempore quaerat, laborum quae, non doloremque nihil quidem dolores culpa ducimus? Corporis dolor, molestiae earum alias commodi repellendus facere minima facilis voluptates at qui eius saepe sequi assumenda dolores libero inventore adipisci deserunt eveniet. Tempora, animi ipsum. Eveniet libero, delectus expedita obcaecati voluptate blanditiis quam vitae. Totam est placeat saepe, consequuntur magni, consectetur reiciendis odit tempore minima voluptates nisi adipisci!</p>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo cum doloremque sunt! Quasi corporis eaque ratione possimus laborum repellat non doloribus vero neque magnam aperiam excepturi adipisci dicta, eum sequi dolorum animi. Dicta officiis corrupti unde, dolor veniam reprehenderit natus tempore quaerat, laborum quae, non doloremque nihil quidem dolores culpa ducimus? Corporis dolor, molestiae earum alias commodi repellendus facere minima facilis voluptates at qui eius saepe sequi assumenda dolores libero inventore adipisci deserunt eveniet. Tempora, animi ipsum. Eveniet libero, delectus expedita obcaecati voluptate blanditiis quam vitae. Totam est placeat saepe, consequuntur magni, consectetur reiciendis odit tempore minima voluptates nisi adipisci!</p>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo cum doloremque sunt! Quasi corporis eaque ratione possimus laborum repellat non doloribus vero neque magnam aperiam excepturi adipisci dicta, eum sequi dolorum animi. Dicta officiis corrupti unde, dolor veniam reprehenderit natus tempore quaerat, laborum quae, non doloremque nihil quidem dolores culpa ducimus? Corporis dolor, molestiae earum alias commodi repellendus facere minima facilis voluptates at qui eius saepe sequi assumenda dolores libero inventore adipisci deserunt eveniet. Tempora, animi ipsum. Eveniet libero, delectus expedita obcaecati voluptate blanditiis quam vitae. Totam est placeat saepe, consequuntur magni, consectetur reiciendis odit tempore minima voluptates nisi adipisci!</p>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
	<script type="module" src="public/js/dashboard.js"></script>
	<script type="module" src="public/js/auth.js"></script>
</body>

</html>