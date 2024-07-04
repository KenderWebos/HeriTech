<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/data', App\Http\Controllers\Api\V1\DataController::class );

use App\Http\Controllers\Api\V1\EventoController as EventoV1;
use App\Http\Controllers\Api\V2\EventoController as EventoV2;

Route::apiResource('v1/evento', EventoV1::class )->only(['index', 'show', 'destroy']);
Route::apiResource('v2/evento', EventoV2::class )->only(['index', 'show', 'destroy'])->middleware('auth:sanctum');

Route::get("/ping", function () {
    return ["message" => "pong", "status" => 200];
});

use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:api'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/project', function () {
        return 'Projects Fetch Successfully!';
    });
});
