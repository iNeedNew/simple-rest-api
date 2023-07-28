<?php

namespace Core;

class Response
{
    /**
     * Display data in json format
     * @param $data
     * @param int $code
     * @return void
     */
    static function json($data, int $code = 200): void
    {
        http_response_code($code);

        $status = ($code >= 400 && $code < 500) ? "error" : "ok";

        echo json_encode(['status' => $status, 'data' => $data], JSON_PRETTY_PRINT);
    }
}