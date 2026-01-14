<?php
$route = $_GET['route'] ?? null;
$id = $_GET['id'] ?? null;
$vis_main = "templates/main/vis_main.php";
if (!$route && $id) {
    $vis_main = 'src/compEmails/vis_email.php';
} else {
    switch ($route) {
        case 'sending':
            $vis_main = 'templates/main/vis_main_sending.php';
            break;
        case 'send':
            $vis_main = 'templates/main/vis_main_send.php';
            break;
        case 'trash':
            $vis_main = 'templates/main/vis_main_trash.php';
            break;
        case 'all':
            $vis_main = 'templates/main/vis_main_all.php';
            break;
        default:
            $vis_main = 'templates/main/vis_main_sending.php';
            break;
    }
}
