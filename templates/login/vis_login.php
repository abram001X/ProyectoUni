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
        <div class="cont_form">
            <div class="shds">
            </div>
            <form action="" class="form" method="post">
                <p>Inicia sesión con tu correo electrónico</p>
                <input type="email" class="in-em" placeholder="Ingresa tu email" name="email">

                <input type="password" class="in-passw" placeholder="Ingresa tu contraseña" name="password">
                <button type="submit" name="action" value="send" class="bu-ses">Iniciar sesión</button>
                <a href="vis_register.php" style="font-size: .8em;">Registrarse</a>
            </form>
        </div>
    </section>
    <script src="formLogin.js"></script>
</body>
</html>