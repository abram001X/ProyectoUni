<?php
include_once('options_requests.php');
include_once('api_emails_saved.php');
$message_send = '';

if (!empty($_POST['inp_asunto']) && !empty($_POST['inp_trabajo']) && !empty($_POST['action'])) {
    global $message_send;
    $subject = $_POST['inp_asunto'];
    $message = $_POST['inp_trabajo'];
    $message_send = api_send_all($subject, $message);
    api_save_email($message,$subject);
}
