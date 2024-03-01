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

Route::get("/personas", function() {
    return ["personas" => ["Kevin", "Patricio"], "status" => 200];
});

Route::get("/random", function() {
    $random = rand(1, 100);
    return ["random" => $random, "status" => 200];
});

Route::post('/login', [LoginController::class, 'login']);

// public function login(Request $request)
//     {
//         $credentials = $request->validate([
//             'email' => ['required', 'email'],
//             'password' => ['required'],
//         ]);

//         if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
//             $request->session()->regenerate();

//             return redirect()->intended('dashboard');
//         }

//         return back()->withErrors([
//             'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
//         ]);
//     }

