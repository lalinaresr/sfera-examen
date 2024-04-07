
//Funcion Iniciar Sesion donde Validaremos los Datos Recibidos.
function iniciarSesion(){
	//Variable usuario donde almacenaremos el Valor del Campo usuario en nuestro Formulario.
	var usuario    = $("#usuario").val();
	//Variable contrasena donde almacenaremos el Valor del Campo contraseña en nuestro Formulario.
	var contrasena = $("#contrasena").val();

	//Validamos los Datos, para que no manden Informacion Nula.
	if(usuario.length == 0 && contrasena.length == 0){
		$("#myModalAviso").modal("show");
		$("#modal-encabezado").html('¡Los 2 Campos estan Vacios!');
		$("#aviso").html('Usted no ha Ingresado Datos, debe Ingresar su Usuario y Contraseña, Intentelo Nuevamente.');
	}else
		if(usuario.length == 0){
		$("#myModalAviso").modal("show");
		$("#modal-encabezado").html('¡El Campo de Usuario esta Vacio!');
		$("#aviso").html('Usted no ha Completado los Datos, debe Ingresar su Usuario y Contraseña, Intentelo Nuevamente.');
	}else
		if(contrasena.length == 0){
		$("#myModalAviso").modal("show");
		$("#modal-encabezado").html('¡El Campo de Contraseña esta Vacio!');
		$("#aviso").html('Usted no ha Completado los Datos, debe Ingresar su Usuario y Contraseña, Intentelo Nuevamente.');
	}else 
		if(usuario.length >= 1 && contrasena.length >= 1){
		//Si los Campos de Texto Traen Información, la asignaremos al data del Metodo Ajax y los mandaremos al Archivo procesa.php.
		$.ajax({
			data: 'usuario='+usuario+'&& contrasena='+contrasena+'&& action='+"formLogin",
			type: 'post',
			url : 'server/procesa.php',
			//Cuando Proceso la Información en el Archivo procesa.php no regresa una respuesta la cual estara en la funcion success del Metodo Ajax.
			success: function(respuesta){				
				if(respuesta=='1'){
                    location.href='dashboard.php';
                }else{                  
                	setTimeout ("location.href='index.php'", 4000);
                    $("#myModalAviso").modal("show");
					$("#modal-encabezado").html('Error al Iniciar Sesión');
					$("#aviso").html('Este Usuario NO existe, Intentelo Nuevamente.');
					
                }
			}
		});
	}	
}

//Funcion para Cerrar Sesion nos redirecciona al Archivo Procesa.php y envia el Usuario y Contraseña NULAS para solo ejecutar la Accion.
function cerrarSesion(){
	$.ajax({
		//Mandaremos los Campos de Usuario y Contrasena, y de Accion le decimos que es el formLogout para que la pase de parametro  a la funcion en php que se llama actions.
		data: 'usuario='+"null"+'&& contrasena='+"null"+'&& action='+"formLogout",
		type: 'post',
		url:  'server/procesa.php',
		//Cuando Proceso la Información en el Archivo procesa.php no regresa una respuesta la cual estara en la funcion success del Metodo Ajax.
		success: function(respuesta){
			window.location=respuesta;				
		}
	});
}