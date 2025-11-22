<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\V1\ApiLoginRequet as V1ApiLoginRequet;
use App\Http\Requests\ApiLoginRequet;
use App\Traits\ApiResponses;

class AuthController extends Controller
{
    use ApiResponses;
    public function login(V1ApiLoginRequet $request)
    {
        return $this->ok($request->get("email"));
    }

    public function register()
    {
        return $this->ok("Register Endpoint");
    }
}
