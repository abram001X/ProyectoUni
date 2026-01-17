<?php
session_start();
include('../../src/api/api_server_login.php');
include('session.php');
isSession('../../index.php');


if (!empty($_POST['action']) && !empty($_POST['password']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = [
        "email" => $email,
        "password" => $password
    ];

    $response = api_login($user);
    if (str_contains($response, "Login exitoso")) {
        $username = substr($response, 15);
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['username'] = $username;
        header('location: ../../index.php');
        exit;
    } else {
        $_SESSION['error_message'] = $response;
    };
};
