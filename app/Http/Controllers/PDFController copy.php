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
        #$allproject=implode(",",$request->projectsname);
//------------------------------------------------------------------
        #$alleducation=implode(",",$request->education);
        #$alleducationDetails=implode(",",$request->educationDetails);
        #$alleducationStatus=implode(",",$request->educationstatus);
//------------------------------------------------------------------
        #$allexperience=implode(",",$request->experience); 
        #$allexperienceDetails=implode(",",$request->experienceDetails); 
//------------------------------------------------------------------
        #$allfrom=[]; 
        #foreach ($request->projectsname as $key => $value) 
        #{
        #    $allfrom=$value;
        #}  
 
        $data = 
        [
            'name' =>$request->name,
            'contact' =>$request->contact,
            'email' =>$request->email,
            'address' =>$request->address,
            //------------------------------------------------------------------
            'projects' => $request->projectsname,
            //------------------------------------------------------------------
            'educations' => $request->education,
            #'alleducationDetails' => $request->educationDetails,
            #'alleducationStatus' => $request->educationstatus,
            //------------------------------------------------------------------
            #'experience' => $request->experience,
            #'allexperienceDetails' => $request->experienceDetails,
        ];
        $pdf = PDF::loadView('PDF-File', $data);
        return $pdf->download('itsolutionstuff.pdf');
    }
}
