<?php
include_once '../../auth.php';

if (isset($_POST)) {
//    validateRoleOrExit(null);
    echo session_id();
    echo "|||||";
    echo session_regenerate_id();
    echo "???";
    echo session_id();
    $login = $_POST['login'];
    $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];
    echo "<div class='alert alert-success'>Product was created. $login / $password_hash / $role </div>";
}