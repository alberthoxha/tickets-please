<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::prefix('v1')->group(function () {
    require base_path('routes/api_v1.php');
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
