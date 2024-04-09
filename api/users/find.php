<?php

if (count($_GET) > 0) {
    require_once './Users.php';
    $users = new Users();
    echo $users->find($_GET['value'], $_GET['field']);
} else {
    echo '403 forbidden access to this resource on the server is denied';
}