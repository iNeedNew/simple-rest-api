<?php

namespace App\Model;

class LocationModel
{
    /**
     * Mock data
     * @return object[]
     */
    public static function mock(): array
    {
        return json_decode(file_get_contents('../mock/locations.json'));
    }
}