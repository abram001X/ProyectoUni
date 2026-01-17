<?php
session_start();
include('../../src/api/api_server_login.php');
include('session.php');
isSession('../../index.php');

function verify_password($password1, $password2)
{
    return $password1 == $password2;
}

if (!empty($_POST['action']) && !empty($_POST['password2']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['username'])) {
    $email = $_POST['email'];
    $password_1 = $_POST['password'];
    $password_2 = $_POST['password2'];
    $username = $_POST['username'];

    $is_same_password = verify_password($password_1, $password_2);

    if (!$is_same_password) {
        $_SESSION['error_message_re'] = "Contraseñas no coinciden";
    }

    $response = api_register($email, $password_1, $username);
    if ($response == "Registro exitoso") {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password_1;
        $_SESSION['username'] = $username;
        header('location: ../../index.php');
        exit;
    } else {
        $_SESSION['error_message_re'] = $response;
    }
}
