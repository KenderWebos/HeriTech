<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use TCPDF;

class ReportController extends Controller
{
    public function showInforme(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        
        $events = Evento::query();
        
        if ($startDate && $endDate) {
            $events->whereBetween('fecha', [$startDate, $endDate]);
        }

        $events = $events->get();

        return view('informe', compact('events'));
    }

    public function showPdf(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $events = Evento::query();

        if ($startDate && $endDate) {
            $events->whereBetween('fecha', [$startDate, $endDate]);
        }

        $events = $events->get();

        // Crear el PDF usando TCPDF
        $pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('helvetica', '', 12);

        $html = view('pdf', compact('events'))->render();
        $pdf->writeHTML($html, true, false, true, false, '');

        // Formatear el nombre del archivo PDF
        $fileName = $startDate . ' - ' . $endDate . '.pdf';

        // Forzar la descarga del archivo PDF
        $pdf->Output($fileName, 'D');
    }
}
