<?php

namespace App\Http\Controllers;

use App\Models\lowongan;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $lowongans = lowongan::all();

        $pdf = Pdf::loadView('pdflowongan', compact('lowongans'))
            ->setPaper('a4', 'landscape');

        return $pdf->download('data-lowongan.pdf');
    }
}
