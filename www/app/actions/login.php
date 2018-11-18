<?php
include_once '../../auth.php';

if (isset($_POST)) {

    echo session_id();
    echo "|||||";
//    echo session_regenerate_id();
    echo "???";
    $user = $_POST['login'];
    $password = $_POST['password'];

    echo getUser($user, $password);
}