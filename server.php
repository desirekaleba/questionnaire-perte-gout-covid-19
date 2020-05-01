<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");

require('./response.php');

$response = new Response();

    $data = json_decode($_POST['data']);
    $response->save(1, $data->q1);
    $response->save(2, $data->q2);
    $response->save(3, $data->q3);
    $response->save(4, $data->q4);
    $response->save(5, $data->q5);
    $response->save(6, $data->q6);
    $response->save(7, $data->q7);
    $response->save(8, $data->q8);
    $response->save(9, $data->q9);
    $response->save(10, $data->q10);
    $response->save(11, $data->q11);
    $response->save(12, $data->q12);
    $response->save(13, $data->q13);
    $response->save(14, $data->q14);
    $response->save(15, $data->q15);
    $response->save(16, $data->comments);
?>