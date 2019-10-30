<?php

namespace BorisNedovis\ApiResponse\Response;

class ApiResponse
{
    /**
     * @param array $data
     * @param array $errors
     * @param int $status
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public static function make($data, $errors, $status)
    {
        return response()
            ->json(compact('data', 'errors', 'status'))
            ->setStatusCode($status);
    }
}