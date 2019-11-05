<?php

namespace App\Http\Controllers;

use App\Order;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class DownloadPDFController extends Controller
{
    public function downloadPDF($id)
    {
    	$order = Order::findOrFail($id);

    	$pdf = PDF::loadView('pdf.downloadPDF', ['order' => $order]);

    	return $pdf->stream();
    }
}
