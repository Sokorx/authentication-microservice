<?php

namespace App\Helpers;

use Exception;


class ApiResponse
{
    /** Handle error api response */
    static function errorResponse(string $message, int $status_code, Exception $trace = null)
    {

        $body = [
            'message' => $message,
            'code' => $status_code ?? null,
            'error_debug' => $trace ? $trace->getMessage() : null,
        ];

        return response()->json($body)->setStatusCode($status_code);
    }





    /** Handle valid api response */
    static function validResponse(string $message,  $data, $status_code = 200)
    {

        $body = [
            'message' => $message,
            'data' => $data,
            'code' => $status_code,
        ];
        return response()->json($body)->setStatusCode($status_code);
    }
}
