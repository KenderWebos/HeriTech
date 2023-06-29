<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//hacemos la misma de test pero retornamos un Json de javaScript

Route::get("/test", function() {
    return ["message" => "HelloWorld", "status" => 200];
});

Route::get("/ping", function() {
    return ["message" => "pong"];
});