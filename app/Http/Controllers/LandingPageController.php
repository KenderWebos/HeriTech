<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $serviciosInformaticos = collect([
            (object)[
                'nombre' => 'Desarrollo de sitios web',
                'descripcion' => 'Creamos sitios web profesionales y a medida para tu negocio.',
                'imagen' => 'desarrollo_web.jpg',
            ],
            (object)[
                'nombre' => 'Asesoría en sistemas informáticos',
                'descripcion' => 'Ofrecemos consultoría para mejorar tus sistemas y procesos tecnológicos.',
                'imagen' => 'consultoria_it.jpg',
            ],
            (object)[
                'nombre' => 'Servicios de seguridad informática',
                'descripcion' => 'Protegemos tu empresa contra amenazas y vulnerabilidades en línea.',
                'imagen' => 'seguridad_informatica.jpg',
            ],
            (object)[
                'nombre' => 'Configuración de redes',
                'descripcion' => 'Diseñamos e implementamos redes eficientes y seguras para tu negocio.',
                'imagen' => 'configuracion_redes.jpg',
            ],
            // Puedes añadir más servicios relevantes aquí
        ]);
        

        return view('pages.landingpage', compact('serviciosInformaticos'));
    }
}
