<?php

namespace App\Http\Controllers;

use App\Models\projet;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class FacturePdf extends Controller
{

    // Generate PDF
    public function createPDF($id) {
        $projet = projet::findOrFail($id);

        // retreive all records from db
      //  $data = Employee::all();

        // share data to view
        //view()->share('employee',$data);
        $pdf = PDF::loadView('pdf_view',['projet'=>$projet]);

        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }
}
