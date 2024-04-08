<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienvenido - Sfera</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">	
	<link rel="stylesheet" type="text/css" href="public/css/estilos.css">
</head>

<body>
	<?php
	//Mandamos a llamar a nuestro archivo de Conexion a la Base de Datos.
	require_once('server/connection.php');
	//Iniciamos Sesion
	session_start();
	//Validamos que Exista la Variable de Session User y que no tenga un Valor Nulo.
	if (isset($_SESSION['user'])) {
		//Recuperame en una Variable el valor entero que trae $_SESSION['user'] que seria el ID del Usuario Logueado.
		$IDUsuario = intval($_SESSION['user']);
		//Creamos la Consulta en donde Recuperaremos todos los Datos del Usuario depende al ID obtenido.
		$queryID   = sprintf("SELECT * FROM `usuario` WHERE `id` = '%d'", $IDUsuario);
		//Ejecutamos la Consulta y la respuesta la Asignamos a una Variable Llamada Statement.
		$statement = $connection->query($queryID);
		//Trae Todos los Datos, Si es que el Usuario Existe.
		$resultSet = $statement->fetch_assoc();
	?>
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
					<button class="btn btn-default btn-sm btn-block" onclick="cerrarSesion();"><span class="glyphicon glyphicon-off"></span> Salir</button>
				</div>
				<div class="col-md-8">
					<h4 class="bienvenida">Bienvenido: <?php echo $resultSet['nombre']; ?></h4><br>
					<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dicta minus molestiae vel beatae natus eveniet ratione temporibus aperiam harum alias officiis assumenda officia quibusdam deleniti eos cupiditate dolore doloribus!
						Ad dolore dignissimos asperiores dicta facere optio quod commodi nam tempore recusandae. Rerum sed nulla eum vero expedita ex delectus voluptates rem at neque quos facere sequi unde optio aliquam!
						Tenetur quod quidem in voluptatem corporis dolorum dicta sit pariatur porro quaerat autem ipsam odit quam beatae tempora quibusdam illum! Modi velit odio nam nulla unde amet odit pariatur at!
						Consequatur rerum amet fuga expedita sunt et tempora saepe? Iusto nihil explicabo perferendis quos provident delectus ducimus necessitatibus reiciendis optio tempora unde earum doloremque commodi laudantium ad nulla vel odio?
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dicta minus molestiae vel beatae natus eveniet ratione temporibus aperiam harum alias officiis assumenda officia quibusdam deleniti eos cupiditate dolore doloribus!
						Ad dolore dignissimos asperiores dicta facere optio quod commodi nam tempore recusandae. Rerum sed nulla eum vero expedita ex delectus voluptates rem at neque quos facere sequi unde optio aliquam!
						Tenetur quod quidem in voluptatem corporis dolorum dicta sit pariatur porro quaerat autem ipsam odit quam beatae tempora quibusdam illum! Modi velit odio nam nulla unde amet odit pariatur at!
						Consequatur rerum amet fuga expedita sunt et tempora saepe? Iusto nihil explicabo perferendis quos provident delectus ducimus necessitatibus reiciendis optio tempora unde earum doloremque commodi laudantium ad nulla vel odio?
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dicta minus molestiae vel beatae natus eveniet ratione temporibus aperiam harum alias officiis assumenda officia quibusdam deleniti eos cupiditate dolore doloribus!
						Ad dolore dignissimos asperiores dicta facere optio quod commodi nam tempore recusandae. Rerum sed nulla eum vero expedita ex delectus voluptates rem at neque quos facere sequi unde optio aliquam!
						Tenetur quod quidem in voluptatem corporis dolorum dicta sit pariatur porro quaerat autem ipsam odit quam beatae tempora quibusdam illum! Modi velit odio nam nulla unde amet odit pariatur at!
						Consequatur rerum amet fuga expedita sunt et tempora saepe? Iusto nihil explicabo perferendis quos provident delectus ducimus necessitatibus reiciendis optio tempora unde earum doloremque commodi laudantium ad nulla vel odio?
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dicta minus molestiae vel beatae natus eveniet ratione temporibus aperiam harum alias officiis assumenda officia quibusdam deleniti eos cupiditate dolore doloribus!
						Ad dolore dignissimos asperiores dicta facere optio quod commodi nam tempore recusandae. Rerum sed nulla eum vero expedita ex delectus voluptates rem at neque quos facere sequi unde optio aliquam!
						Tenetur quod quidem in voluptatem corporis dolorum dicta sit pariatur porro quaerat autem ipsam odit quam beatae tempora quibusdam illum! Modi velit odio nam nulla unde amet odit pariatur at!</p>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>

	<?php
		//Si la Variable de SESSION NO Existe o trae un Valor Nulo lo Redireccionamos al Index.
	} else {
		header("location: index.php");
	}
	?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
	<!-- Archivo Js donde Validaremos los Campos y haremos enlace con el Archivo PHP para Consultar a la BD -->
	<script type="text/javascript" src="public/js/principal.js"></script>
</body>

</html>