<?php

namespace App\Helpers;

class ApiFormatter
{
    protected static $response = [
        
        'code' => null,
        'messege' => null,
        'data' => null,
    ];

    public static function createApi($code = null, $messege = null, $data = null)
    {
        self::$response['code'] = $code;
        self::$response['messege'] = $messege;
        self::$response['data'] = $data;

        return response()->json(self::$response, self::$response['code']);
    }
}