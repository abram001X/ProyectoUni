<?php
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
