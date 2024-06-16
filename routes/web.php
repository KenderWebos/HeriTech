<?php

use App\Http\Controllers\kNotesController;
use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\TipoEventoController;
use App\Http\Controllers\TipoModuloController;
use App\Http\Controllers\EdunetController;

use App\Http\Controllers\DataController;
use App\Http\Controllers\RolesController;

use App\Http\Controllers\SettingController;

use App\Http\Controllers\ReportController;

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

Route::get("/a", function () {
	return view('a');
});

Route::get("/terminal", function () {
	return view('terminal');
});

Route::get("/gametesting", function () {
	return view('gametesting');
})->name('gametesting');

Route::get("/proposito", function () {
	return view('proposito');
})->name('proposito');

Route::get("/kevincampos", function () {
	return view('pages.kevincampos');
});

Route::get("/fc/{name}", function ($name) {
	return "🎉🥳 ¡Feliz Cumpleaños, $name! 🎂🎈";
});

Route::resource('edunet', EdunetController::class);

Route::get("/rand", function () {
	return view('pages.rand');
});

Route::get('chating', [function () {
	return view('pages.partials.chat.chating');
}]);

Route::resource('roles', RolesController::class);

Auth::routes();

// muestra todas las rutas en la ruta /routes

Route::get('/routes', function () {
    $menu = '<ul>';

    foreach (Route::getRoutes() as $route) {
        $menu .= '<li><a href="' . url($route->uri()) . '">' . $route->uri() . '</a></li>';
    }

    $menu .= '</ul>';

    return $menu;
});


//muestra todos los usuarios en la ruta /allusers

Route::get('allusers', function () {
	return App\Models\User::all();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/landingpage', [App\Http\Controllers\LandingPageController::class, 'index'])->name('landingpage');

Route::get('/knotes', [App\Http\Controllers\kNotesController::class, 'index'])->name('knotes');
Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'index'])->name('calendar');

Route::post('/evento/guardar', [App\Http\Controllers\CalendarController::class, 'guardar'])->name('evento.guardar');
Route::delete('/evento/borrar/{id}', [App\Http\Controllers\CalendarController::class, 'borrar'])->name('evento.borrar');

Route::post('/guardar-nota', [kNotesController::class, 'guardar'])->name('guardar_nota');
Route::delete('/destroy-nota/{id}', [kNotesController::class, 'borrar'])->name('notas.destroy');

Route::resource('/posts', App\Http\Controllers\PostController::class)->middleware(['auth']);

Route::resource('tipo-eventos', TipoEventoController::class);

Route::resource('data', DataController::class);

Route::get('/calendargo', [App\Http\Controllers\CalendarGoController::class, 'index'])->name('calendargo');
Route::get('/games', [App\Http\Controllers\gamesController::class, 'index']);

Route::get('/informe', [ReportController::class, 'showInforme'])->name('informe');
Route::get('/pdf', [ReportController::class, 'showPdf'])->name('pdf');

//LANDINGPAGE CONFIG

Route::resource('settings', SettingController::class);

// Route::resource('knotes', kNotesController::class);


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
});

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
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	// Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
	// Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	// Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
