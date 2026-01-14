<?php
$url = "https://23736764f051.ngrok-free.app";

function options_requests($api)
{
    curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($api, CURLOPT_POST, true);

    $response = curl_exec($api);
    $response_decode = json_decode($response, true);
    return $response_decode;
};

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
