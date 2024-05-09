<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use app\Http\Controllers\LoginController;

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

Route::get("/ping", function() {
    return ["message" => "pong", "status" => 200];
});

Route::get("/random", function() {
    $random = rand(1, 100);
    return ["random" => $random, "status" => 200];
});

// COMIENZA EDUNET APLICACION

use App\Models\User;

Route::get("/allusers", function() {
    $users = User::all();
    return $users;
});

use App\Models\kNotes;

Route::get("/notes", function() {
    $notes = kNotes::all();
    return $notes;
});