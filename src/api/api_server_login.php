<?php
include('options_requests.php');
$url = "https://consent-aims-literally-gmbh.trycloudflare.com";


function api_login($user)
{
    global $url;
    $email = $user["email"];
    $password = $user["password"];
    $api = curl_init($url . "/login?email=" . $email . "&password=" . $password);

    $response = options_requests($api);
    if (curl_errno($api)) {
        return 'Error en cURL: ' . curl_error($api);
    } else {
        //$info_code = curl_getinfo($api, CURLINFO_HTTP_CODE);
        return $response["message"];
    }
}

function api_register($email, $password, $username)
{
    global $url;

    $api = curl_init($url . "/register?user=" . $username . "&email=" . $email . "&password=" . $password);
    $response = options_requests($api);
    if (curl_errno($api)) {
        return 'Error en curl: ' . curl_error($api);
    } else return $response["message"];
}
