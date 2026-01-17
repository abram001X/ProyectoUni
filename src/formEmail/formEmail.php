<?php
include_once('./src/api/api_send.php');
$url = "https://consent-aims-literally-gmbh.trycloudflare.com";
$response_res = "";
if (!empty($_POST['inp_asunto']) && !empty($_POST['inp_trabajo']) && !empty($_POST['action'])) {
    //$toUser = $_POST['inp_destino'];
    $subject = $_POST['inp_asunto'];
    $message = $_POST['inp_trabajo'];
    global $url;

    $response = api_send_all($subject, $message);
    $response_res = $response;
};
