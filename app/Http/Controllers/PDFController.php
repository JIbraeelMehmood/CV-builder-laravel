<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    //
    public function index()
    {
      return view('PDF-Form');
    }

    public function generatePDF(Request $request)
    {
        $data = [
            'name' =>$request->name,
            'contact' =>$request->contact,
            'email' =>$request->email,
            'address' =>$request->address,
            'projects' => $request->projectsname,
            'educations' => $request->education,
            'alleducationDetails' => $request->educationDetails,
            'alleducationStatus' => $request->educationstatus,
            #'experience' => $request->experienceDetails,
            'experience' => $request->experience,
            'allexperienceDetails' => $request->experienceDetails,
            ];
        $pdf = PDF::loadView('PDF-File', $data);
        return $pdf->download('itsolutionstuff.pdf');
    }
    
}
