<?php

namespace App\Http\Controllers;

use App\Models\RoadTrafficAccident;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function rta_download($id)
    {
        $rta = RoadTrafficAccident::with('cover_type', 'third_party', 'witness')->find($id);
        $data = [
            'logo' => asset('assets/images/update-17-06-2023/resources/main-menu-logo.png'),
            'rta' => $rta,
        ];
        // return view('backend.pdfs.rta', $data);
        $name = 'RTA-' . $rta->rta_number . '.pdf';
        $pdf = Pdf::loadView('backend.pdfs.rta', $data);
        $pdf->setPaper('a4');
        return $pdf->download($name);
    }
}
