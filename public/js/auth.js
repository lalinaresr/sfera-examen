import { HOME, LOGIN, LOGOUT } from './constants.js';

$("#form-login").submit(function (e) {
	e.preventDefault();

	let data = $(this).serialize();
	let type = $(this).attr('method');

	$.ajax({
		data,
		type,
		url: LOGIN,
		dataType: 'json',
		beforeSend: function () {
			$("#btn-login").attr('disabled', true);
			$("#btn-login").text('Procesando...');
		},
		success: function (response) {
			$("#btn-login").removeAttr('disabled');
			$("#btn-login").html('<span class="glyphicon glyphicon-lock"></span> Entrar');

			if (response.type == 'success') {
				location.href = HOME;
			} else {
				alert('El usuario y/o contraseña que ingreso no coinciden con alguno de nuestros registros');
			}
		}
	});
});

$("#btn-logout").click(function (e) {
	e.preventDefault();

	if (confirm('¿Seguro que desea salir del sistema?')) {
		$.ajax({
			data: 'logout=true',
			type: 'POST',
			url: LOGOUT,
			dataType: 'json',
			success: function (response) {
				if (response.type == 'success') {
					location.href = HOME;
				}
			}
		});
	}
});