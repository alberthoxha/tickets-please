<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\V1\ApiLoginRequet;
use App\Traits\ApiResponses;

class AuthController extends Controller
{
    use ApiResponses;
    public function login(ApiLoginRequet $request)
    {
        return $this->ok($request->get("email"));
    }

    public function register()
    {
        return $this->ok("Register Endpoint");
    }
}
