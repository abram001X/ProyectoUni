<?php include_once 'templates/login/logout.php' ?>
<?php
if (!isset($_SESSION['username'])) {
    header('location: templates/login/vis_login.php');
    exit;
};
?>
<?php include_once 'src/formEmail/formEmail.php' ?>
<?php include_once 'routes.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/styles/index.css">
    <link rel="stylesheet" href="templates/styles/header.css">
    <link rel="stylesheet" href="templates/styles/menu.css">
    <link rel="stylesheet" href="templates/styles/main.css">
    <title>Proyecto</title>
</head>

<body>
    <section class="cont_index">
        <?php include_once 'templates/vis_menu.php' ?>
        <section class="cont_menu-main">
            <?php include_once $vis_main ?>
        </section>
    </section>
</body>
</html>