<?php

if (count($_POST) > 0) {
    require_once './Auth.php';
    $auth = new Auth();
    echo $auth->login($_POST);
} else {
    echo '403 forbidden access to this resource on the server is denied';
}
