<?php

namespace App\Controller\Api;

use Core\Response;

/**
 * TODO: For test api. Remove on production server.
 */
class SuccessController extends BaseApiController
{
    public function index(): void
    {
        Response::json(['text' => 'Api is work!']);
    }
}