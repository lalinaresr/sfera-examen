<?php
session_start();

if (isset($_SESSION['is_logged_in'])) {
	$title = 'Bienvenido';
	$render = 'dashboard/container.php';
} else {
	$title = 'Identificarse';
	$render = 'auth/login.php';
}

include_once 'partials/header.php';
include_once 'partials/common/header.php';
include_once "partials/{$render}";
include_once 'partials/footer.php';
