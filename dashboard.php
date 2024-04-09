<?php
session_start();

if (isset($_SESSION['is_logged_in'])) {
	include_once 'partials/header.php';
	include_once 'partials/common/header.php';
	include_once 'partials/dashboard/container.php';
	include_once 'partials/footer.php';
} else {
	header('Location: /');
	exit;
}
