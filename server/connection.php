<?php  
	//Mandamos a llamar a nuestro archivo de configuracion de base de datos.
	require_once('database.php'); 

	//Variable que guardara la Conexion a Nuestro Servidor.
	$connection = new mysqli(HOST, USER, PASSWORD, DATABASE);

	if ($connection->connect_errno) {
		echo "Conexion a tu Servidor Fallida.";
	}
?>