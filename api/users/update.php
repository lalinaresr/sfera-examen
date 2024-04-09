<?php
require_once './Users.php';

if (isset($_SESSION['is_logged_in'])) {
    $users = new Users();
    echo $users->update($_POST);
} else {
    echo '403 forbidden access to this resource on the server is denied';
}
