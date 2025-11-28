<?php
$route = $_GET['route'] ?? "";
$vis_main = "templates/main/vis_main.php";
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
