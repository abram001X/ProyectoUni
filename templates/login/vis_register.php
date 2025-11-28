<?php
session_start();
include('session.php');
isSession('../../index.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/login.css">
    <title>Proyecto Uni</title>
</head>

<body>
    <section class="cont_login">
        <div class="cont_form-reg">
            <div class="shds">
                <img src="../../src/assets/velozpost.jpg" alt="velozpost" class="img_login">
            </div>
            <form action="login.php" class="form" method="post">
                <p style="text-align: center;">Registrate para iniciar sesión e ingresar a VelozPost</p>
                <input type="email" class="in-em" placeholder="Nombre de usuario" name="email">
                <input type="email" class="in-em" placeholder="Ingresa tu email" name="email">

                <input type="password" class="in-passw" placeholder="Ingresa nueva contraseña" name="password">
                <input type="password" class="in-passw" placeholder="Repite la contraseña" name="password">

                <button type="submit" name="action" value="send" class="bu-ses">Registrarse</button>
                <a href="vis_login.php" style="font-size: .8em;">Iniciar sesión</a>
            </form>
        </div>
    </section>
</body>

</html>