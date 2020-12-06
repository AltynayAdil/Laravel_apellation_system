<?php

namespace App\Http\Controllers;

use App\Statement;
use App\User;
use Illuminate\Http\Request;
use DB;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Storage;

;
class PdfController extends Controller
{
    public function generatePDF($id){
//        dd($id);
        $statements = Statement::find($id);
//        $pdfpath =

        $pdf = PDF::loadView('statement_pdf',compact('statements'));

//        $pdf("c:\\$statements->filepdf,'generatorpdf.pdf'");

        return $pdf->download($statements->filepdf,'generatorpdf.pdf');

    }
    public function statement($id){
        $statement = Statement::find($id);
        $path = storage_path('app/public/statements/'.$statement->filepdf);
        return response()->download($path);


    }

}
