<?php
session_start();

include_once "database.php";

function validateRoleOrExit($role)
{
    $database = new Database();
    $stmt = $database->getUserDbConnection()->prepare(
        'select role.name from active_session
join user on user.id = active_session.user_id
join role on role.id = user.role_id
where active_session.id = :session_id');

    echo session_id();
    $stmt->execute(array(
        'session_id' => session_id()
    ));
    echo($stmt);
}

function getUser($user, $password)
{
    $database = new Database();
    $stmt = $database->getUserDbConnection()->prepare(
        'select user.name, role.name 
from user
join role on role.id = user.role_id
where user.name = :name and 
      user.password = :password');

    $stmt->execute(array(
        'name' => $user,
        'password' => $password
    ));
    echo($stmt);
}