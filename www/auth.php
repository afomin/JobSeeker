<?php
session_start();

abstract class Roles
{
    const Unauthorized = 0;
    const Customer = 1;
    const Executor = 2;
}

function auth()
{
    $userRole = $_SESSION['userRole'];
    if (empty($userRole) || $userRole === Roles::Unauthorized) {
        header('Location: index.php');
        exit();
    }
}

function getUserRole($user, $pass)
{
    if ($user === 'customer' && $pass === 'qwerty') {
        return Roles::Customer;
    }
    if ($user === 'executor' && $pass === '123456') {
        return Roles::Executor;
    }
    return Roles::Unauthorized;
}
