<?php

namespace App\Http\Controllers;

use App\Protokol;
use App\Statement;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class CommissionController extends Controller
{
    public function index(){
        $statements = Statement::where('status','Отправлено комиссии')
                                ->orWhere('status', 'Рассмотрен')
                                ->get();
        $this->create($statements);

        return view('commission.index', compact('statements'));
    }
    public function protokol($id){
        dd($id);
    }
    public function download($id){
        dd($id);
    }
    public function create($statements){
        $protokol = new Protokol();
        $statements = Statement::find(1);
        $pdf = PDF::loadView('protokol_pdf',compact('statements'));

        $protokol->name = "protokol_".rand(1,1000);
        // $pdf("c:\\$statements->filepdf,'generatorpdf.pdf'");
        $protokol->save();
//        $pdf("c:\\$statements->filepdf,'generatorpdf.pdf'");

        return $pdf->download($statements->filepdf, 'protokol.pdf');
    }
}
