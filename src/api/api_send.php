<?php
include_once('options_requests.php');
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
