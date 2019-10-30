<?php

namespace BorisNedovis\ApiResponse\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

use BorisNedovis\ApiResponse\Response\ApiResponse;

class ApiResponseServiceProvider extends ServiceProvider
{
    /**
     * Register the application's response macros for API.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('api', function ($data = [], $errors = [], $status = 200) {
            return ApiResponse::make($data, $errors, $status);
        });
    }
}