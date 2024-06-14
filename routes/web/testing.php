<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get("/a", function () {
	return view('a');
});

Route::get("/fc/{name}", function ($name) {
	return "🎉🥳 ¡Feliz Cumpleaños, $name! 🎂🎈";
});

Route::get("/rand", function () {
	return view('pages.rand');
});

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