<?php


function returnResponse($status, $data, $message, $type = 'array')
{
    if ($type == 'array') {
        return array(
            'status' => $status,
            'data' => $data,
            'message' => $message,
        );
    }

    return json_encode(array(
        'status' => $status,
        'data' => $data,
        'message' => $message,
    ));
}