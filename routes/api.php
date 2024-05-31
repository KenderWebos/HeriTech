<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// use app\Http\Controllers\LoginController;

// BASE CORE

Route::apiResource('v1/data', App\Http\Controllers\Api\V1\DataController::class );

use App\Http\Controllers\Api\V1\EventoController as EventoV1;
use App\Http\Controllers\Api\V2\EventoController as EventoV2;

Route::apiResource('v1/evento', EventoV1::class )->only(['index', 'show', 'destroy']);
Route::apiResource('v2/evento', EventoV2::class )->only(['index', 'show', 'destroy'])->middleware('auth:sanctum');

// Route::post('login', [
//     App\Http\Controllers\api\LoginController::class,
//     'login'
// ]);

// PASSPORT AND TESTING API

// use Laravel\Passport\Http\Controllers\AccessTokenController;

// Route::post('/oauth/token', [AccessTokenController::class, 'issueToken']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/ping", function () {
    return ["message" => "pong", "status" => 200];
});

// COMIENZA EDUNET APLICACION

use App\Models\User;

Route::get("/allusers", function () {
    $users = User::all();
    return $users;
});

use App\Models\kNotes;

Route::get("/notes", function () {
    $notes = kNotes::all();
    return $notes;
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
