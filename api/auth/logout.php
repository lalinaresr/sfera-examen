<?php

if (isset($_POST['logout'])) {
    require_once './Auth.php';
    $auth = new Auth();
    echo $auth->logout();
} else {
    echo '403 forbidden access to this resource on the server is denied';
}
