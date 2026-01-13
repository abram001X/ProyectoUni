<?php
$url = "https://23736764f051.ngrok-free.app/login";

function api_login($user)
{
    global $url;
    $email = $user["email"];
    $password = $user["password"];
    $api = curl_init($url . "?email=" . $email . "&password=" . $password);

    curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($api, CURLOPT_POST, true);

    $response = curl_exec($api);
    $response_decode = json_decode($response, true);
    if (curl_errno($api)) {
        return 'Error en cURL: ' . curl_error($api);
    } else {
        //$info_code = curl_getinfo($api, CURLINFO_HTTP_CODE);
        return $response_decode["message"];
    }
}
