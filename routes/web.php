<?php

use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\TipoEventoController;
use App\Http\Controllers\TipoModuloController;
use App\Http\Controllers\EdunetController;

use App\Http\Controllers\DataController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\RolesController;

use App\Http\Controllers\SettingController;

// require_once __DIR__ ."web/testing.php";
use App\Http\Controllers\ReportController;
use App\Http\Controllers\FlashcardController;


use App\Http\Controllers\MesaController;
use App\Http\Controllers\ReservaController;

Route::resource('mesas', MesaController::class);

Route::resource('reservas', ReservaController::class);
Route::post('reservas/{id}/rechazar', [ReservaController::class, 'rechazar'])->name('reservas.rechazar');






Route::get("/a", function () {
	return view('a');
});

Route::get("/terminal", function () {
	return view('terminal');
});

Route::get("/vr", function () {
	return view('pages.argon.virtual-reality');
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

Route::resource('edunet', EdunetController::class);

Route::get('chating', [function () {
	return view('pages.partials.chat.chating');
}]);

Route::resource('roles', RolesController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/landingpage', [App\Http\Controllers\LandingPageController::class, 'index'])->name('landingpage');

// Route::get('/landingpage', function () {
// 	return redirect('/mimateria');
// });

Route::get('/top', [App\Http\Controllers\TopEducatorsController::class, 'index'])->name('top');

Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'index'])->name('calendar');
Route::post('/evento/guardar', [App\Http\Controllers\CalendarController::class, 'guardar'])->name('evento.guardar');
Route::delete('/evento/borrar/{id}', [App\Http\Controllers\CalendarController::class, 'borrar'])->name('evento.borrar');

Route::resource('/posts', App\Http\Controllers\PostController::class)->middleware(['auth']);

Route::resource('data', DataController::class);
Route::resource('notes', NoteController::class);
Route::resource('eventos', EventoController::class);
Route::resource('tipo-eventos', TipoEventoController::class);

Route::get('/calendargo', [App\Http\Controllers\CalendarGoController::class, 'index'])->name('calendargo');
Route::get('/mimateria', [App\Http\Controllers\MiMateriaController::class, 'index'])->name('mimateria');

Route::get('/games', [App\Http\Controllers\gamesController::class, 'index']);

Route::get('/informe', [ReportController::class, 'showInforme'])->name('informe');
Route::get('/pdf', [ReportController::class, 'showPdf'])->name('pdf');

Route::resource('flashcards', FlashcardController::class);

//LANDINGPAGE CONFIG

Route::resource('settings', SettingController::class);

// Perfil de usuario y autenticación

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\VerificationController;

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

Route::group(['middleware' => 'auth'], function () {
	// RUTAS VERIFICACION EMAIL
	Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
	Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
	Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	// Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
	// Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	// Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');
	Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware('auth');
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
	
});


