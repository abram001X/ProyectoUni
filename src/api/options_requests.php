<?php
$url = "https://loops-chief-expressed-scales.trycloudflare.com";
$url2 = "http://localhost:3000";
function options_requests($api)
{

    curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($api, CURLOPT_POST, true);

    $response = curl_exec($api);
    $response_decode = json_decode($response, true);
    return $response_decode;
};


function options_requests_all($api, $data)
{
    $body = json_encode($data);
    curl_setopt($api, CURLOPT_POSTFIELDS, $body);
    curl_setopt($api, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($body)
    ]);
    curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($api, CURLOPT_POST, true);

    $result = curl_exec($api);
    $response = json_decode($result, true);

    return $response;
};

function options_requests_save_emails($api, $data) // Guarda todos los emails en la base datos
{
    $body = json_encode($data);
    curl_setopt($api, CURLOPT_POSTFIELDS, $body);
    curl_setopt($api, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($body)
    ]);
    curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($api, CURLOPT_POST, true);

    $result = curl_exec($api);
    $response = json_decode($result, true);

    return $response;
};

function options_requests_get_emails($api) // Obtiene todos los emails guardados
{
    curl_setopt($api, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($api);
    $response_decode = json_decode($response, true);
    return $response_decode;
};
