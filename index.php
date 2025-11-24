<?php include_once 'templates/login/logout.php' ?>
<?php
if (!isset($_SESSION['username'])) {
    header('location: templates/login/vis_login.php');
    exit;
};
?>
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
        <?php require_once "templates/vis_menu.php" ?>
        <section class="cont_menu-main">
            <?php require_once "templates/main/vis_main.php" ?>
        </section>
    </section>
</body>
<script type="module" src="/src/routes/navMenu.js"></script>
<script type="module" src="/src/routes/email.js"></script>
<script type="module" src="/src/formEmail/formEmail.js"></script>
</html>