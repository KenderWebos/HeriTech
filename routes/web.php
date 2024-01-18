<?php

use App\Http\Controllers\kNotesController;
use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TipoEventoController;
use App\Http\Controllers\TipoModuloController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Autenticación y páginas públicas
Auth::routes();

Route::get('chating', [function() {
	return view('pages.partials.chat.chating');
}]);

//muestra todas las rutas en la ruta /routes
Route::get('/routes', function () {
    $routes = [];

    foreach (Route::getRoutes() as $route) {
        $routes[] = [
            'url' => url($route->uri()),
            'description' => $route->uri(),
        ];
    }

    return response()->json($routes);
});

//muestra todos los usuarios en la ruta /allusers
Route::get('allusers', function () {
	return App\Models\User::all();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/chat', [App\Http\Controllers\ChatController::class, 'index'])->name('chat');

Route::get('/landingpage', [App\Http\Controllers\LandingPageController::class, 'index'])->name('landingpage');

Route::get('/knotes', [App\Http\Controllers\kNotesController::class, 'index'])->name('knotes');
Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'index'])->name('calendar');

Route::post('/evento/guardar', [App\Http\Controllers\CalendarController::class, 'guardar'])->name('evento.guardar');
Route::delete('/evento/borrar/{id}', [App\Http\Controllers\CalendarController::class, 'borrar'])->name('evento.borrar');

Route::post('/guardar-nota', [kNotesController::class, 'guardar'])->name('guardar_nota');
Route::delete('/destroy-nota/{id}', [kNotesController::class, 'borrar'])->name('notas.destroy');

Route::resource('tipo-eventos', TipoEventoController::class);
Route::resource('tipo-modulos', TipoModuloController::class);

Route::get('/calendargo', [App\Http\Controllers\CalendarGoController::class, 'index'])->name('calendargo.index');
Route::get('/games', [App\Http\Controllers\gamesController::class, 'index'])->name('games');

Route::prefix('public')->group(function () {
});

// Perfil de usuario y autenticación

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;

Route::get('/', function () {
	return redirect('/landingpage');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});