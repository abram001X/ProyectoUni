<?php
session_start();
$user = [
    "email" => "holasoylaca@gmail.com",
    "password" => "hola123",
    "username" => "Abraham Alfonzo"
];
include('session.php');
isSession('../../index.php');
if (!empty($_POST['action']) && !empty($_POST['password']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $user['username'];
    if ($email === $user['email'] && $password === $user['password']) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['username'] = $username;
        header('location: ../../index.php');
        exit;
    } else {
        $_SESSION['error_message'] = "Usuario Inválido";
    };
};
