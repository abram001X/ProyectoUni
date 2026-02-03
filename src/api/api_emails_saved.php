<?php
include_once('options_requests.php');
function api_get_emails()
{
    global $url2;
    $username_rep = $_SESSION['username'];
    $username = $_SESSION['username'];
    if (str_contains($username_rep, " ")) {
        $username_rep = str_replace(" ", "%20", $username);
    }

    $api = curl_init($url2 . "/get_emails" . "/". $username_rep);

    $response = options_requests_get_emails($api);
    if (curl_errno($api)) {
        return 'Error en cURL: ' . curl_error($api);
    } else {
        //$info_code = curl_getinfo($api, CURLINFO_HTTP_CODE);
        return $response;
    }
}

function api_save_email($message,$subject)
{
    global $url2;
    $api = curl_init($url2 . "/save_email");
    $data = [
        "message" => $message,
        "username" => $_SESSION['username'],
        "subject" => $subject,
        "isDeleted" => "false"
    ];
    options_requests_save_emails($api, $data);
    if (curl_errno($api)) {
        return 'Error en cURL: ' . curl_error($api);
    }
}

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
