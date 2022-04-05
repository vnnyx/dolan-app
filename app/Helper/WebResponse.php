<?php

namespace App\Helper;

class WebResponse
{
    protected static $response = [
        'code' => null,
        'status' => null,
        'data' => null
    ];

    public static function webResponse($code = null, $status = null, $data = null)
    {
        self::$response['code'] = $code;
        self::$response['status'] = $status;
        self::$response['data'] = $data;

        return response()->json(self::$response, self::$response['code']);
    }
}
