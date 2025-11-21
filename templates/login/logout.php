<?php if (!empty($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('location: vis_login.php');
    exit;
}
