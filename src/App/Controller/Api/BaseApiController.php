<?php

namespace App\Controller\Api;

class BaseApiController
{
    public function __construct()
    {
        header('Content-Type: application/json; charset=utf-8');
    }
}