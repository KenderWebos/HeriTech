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
                'icono' => 'fa-desktop',
            ],
            (object)[
                'nombre' => 'Asesoría en sistemas informáticos',
                'descripcion' => 'Ofrecemos consultoría para mejorar tus sistemas y procesos tecnológicos.',
                'imagen' => 'consultoria_it.jpg',
                'icono' => 'fa-cogs',
            ],
            (object)[
                'nombre' => 'Punto de Venta y Facturación',
                'descripcion' => 'Implementamos sistemas de punto de venta y facturación electrónica.',
                'imagen' => 'punto_venta.jpg',
                'icono' => 'fa-cash-register',
            ],
            (object)[
                'nombre' => 'Software para Pymes',
                'descripcion' => 'Desarrollamos software a la medida para los problemas de tu negocio.',
                'imagen' => 'software_medida.jpg',
                'icono' => 'fa-cube',
            ],
            (object)[
                'nombre' => 'Desarrollo de aplicaciones 3D',
                'descripcion' => 'Desarrollamos aplicaciones 3D para tu empresa.',
                'imagen' => 'aplicaciones_3d.jpg',
                'icono' => 'fa-cube',
            ],
            (object)[
                'nombre' => 'Gamificacion',
                'descripcion' => 'Desarrollamos experiencias interactivas de aprendizaje y capacitacion para tu empresa con el motor Unity.',
                'imagen' => 'videojuegos.jpg',
                'icono' => 'fa-cube',
            ],
            // Puedes añadir más servicios relevantes aquí
        ]);



        return view('pages.landingpage', compact('serviciosInformaticos'));
    }
}
