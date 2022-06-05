<?php

namespace App\Helper;

class WebResponse
{
    protected static $response = [
        'code' => null,
        'status' => null,
        'data' => null,
        'errors'=> null,
    ];

    public static function webResponse($code = null, $status = null, $data = null, $error=null)
    {
        self::$response['code'] = $code;
        self::$response['status'] = $status;
        self::$response['data'] = $data;
        self::$response['errors']=$error;

        return response()->json(self::$response, self::$response['code']);
    }
}
