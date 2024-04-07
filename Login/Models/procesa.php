<?php  
	//Mandamos a llamar a nuestro archivo de configuracion de base de datos.
	require_once('../Config/database.php');

	class Procesa{

		//Variable Privada para el Usuario.
		private $_usuario	 = null;

		//Variable Privada para la Contraseña.
		private $_contrasena = null;

		//Metodo donde se Comprueba que Accion se Realizara depende al Boton Seleccionado.
		public function actions($usuario, $contrasena, $action){
			switch ($action) {
				case 'formLogin':
					//Mandamos a Llama a Metodo login que se encuentra en la misma Clase con a Palabra Reservada Self.
					self::login($usuario, $contrasena); 
					break;
				
				case 'formLogout':
					//Mandamos a Llama a Metodo logout que se encuentra en la misma Clase con a Palabra Reservada Self.
					self::logout(); 
					break;

				default:
					//Valor por Defecto de Switch
					echo "Esta Peticion NO Existe.";
					break;
			}
		}

		//Funcion Publica donde se Validara el Usuario y Contraseña pasados por el Formulario.
		public function login($usuario, $contrasena){
			//Mandamos a llamar a nuestro archivo de Conexion a la Base de Datos.
			require_once(RUTADB);

			//El Valor de la Variable Usuario sera Pasado al Atributo Privado de Usuario. 
			$this->_usuario    = $connection->real_escape_string(trim($usuario));
			//El Valor de la Variable Contrasena sera Pasado al Atributo Privado de Contrasena. 
			$this->_contrasena = $connection->real_escape_string(trim($contrasena));
			//Consulta para Revisar que el Usuario y Contrasena Existan en la Base de Datos:
			$queryCheck = sprintf("SELECT * FROM `usuario` WHERE `usuario` = '%s' AND `contrasena` = '%s'", $this->_usuario, $this->_contrasena);
			//Ejecutamos la Consulta y la respuesta la Asignamos a una Variable Llamada Statement.
			$statement  = $connection->query($queryCheck);
			//Trae Todos los Datos, Si es que el Usuario Existe.
			$resultSet  = $statement->fetch_assoc();
			//Vemos cuantas Filas Regreso la Consulta.
			$filas		= $statement->num_rows;

			//Validamos que las Filas Retornadas sean Mayores a CERO y saber que si Existe el Usuario.
			if ($filas > 0) {
				//Enviaremos la Ruta a Donde debe Redireccionar al Usuario Logueado.
				echo "1";
				//Iniciamos Sesion
				session_start();
				//Creamos una Variable de SESSION llamada user que contendra el ID del Usuario Logueado.
				$_SESSION['user'] = $resultSet['id'];
			}else{
				//Si El Usuario no Existe nos Redirecciona al Index.
				echo "0";
			}
		}

		//Funcion Publica donde se Cerrara la Sesion.
		public function logout(){
			//Mandamos a llamar a nuestro archivo de Conexion a la Base de Datos.
			require_once(RUTADB);
			//Iniciamos Sesion
			session_start();
			//Destruimos las Sesiones con el ID de Usuario.
			session_destroy();
			//Liberamos todas las variables de sesión actualmente registradas.
			session_unset();
			//La Variabe de Sesion la Igualamos a NUlO.
			$_SESSION['user'] = null;
			//Al Acabar toda la Sesion nos Redireccionara al Index.
			echo "../Views/index.php";
		}
	}

	//Creamos un Objeto de la Clase Procesa.
	$procesa = new Procesa();
	//Mandamos a llamar la Function de actions con el Objeto de la Clase Procesa.
	$procesa->actions($_POST['usuario'], $_POST['contrasena'], $_POST['action']);
?>