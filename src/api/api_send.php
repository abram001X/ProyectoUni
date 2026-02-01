<?php
include_once('options_requests.php');
$message_send = '';
function api_send_all($subject, $message)
{
    global $url;
    $api = curl_init($url . "/send-emails/all");
    $data = [
        "email" => $_SESSION['email'],
        "password" => $_SESSION['password'],
        "subject" => $subject,
        "message" => $message
    ];
    
    $response = options_requests_all($api, $data);
    if (curl_errno($api)) {
        return 'Error en cURL: ' . curl_error($api);
    } else {
        //$info_code = curl_getinfo($api, CURLINFO_HTTP_CODE);
       
       return $response["message"];
    }
}
if (!empty($_POST['inp_asunto']) && !empty($_POST['inp_trabajo']) && !empty($_POST['action'])){
    global $message_send;
    $subject = $_POST['inp_asunto'];
    $message = $_POST['inp_trabajo'];
    $message_send = api_send_all($subject, $message);
}
