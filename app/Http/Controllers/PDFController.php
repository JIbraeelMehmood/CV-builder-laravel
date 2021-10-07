<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Storage;
class PDFController extends Controller
{
    //
    public function index()
    {
      return view('PDF-Form');
    }

    public function generatePDF(Request $request)
    {
            //  Let's do everything here
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([
                    'image' => 'mimes:jpeg,png|max:1014',
                ]);
                $extension = $request->image->extension();
                #$request->image->move(public_path('images'),$request->name.".".$extension);
                #$request->image->storeAs('images',$request->name.".".$extension, 's3');
                $request->image->storeAs('/public', $request->name.".".$extension);
                $url = Storage::url($request->name.".".$extension);
            }

        $data = [
            'imageurl' => $url,
            'name' =>$request->name,
            'contact' =>$request->contact,
            'email' =>$request->email,
            'address' =>$request->address,
//------------------------------------------------------------------
            'projects' => $request->projectsname,
//------------------------------------------------------------------
            'educations' => $request->education,
            'alleducationDetails' => $request->educationDetails,
            'alleducationStatus' => $request->educationstatus,
//------------------------------------------------------------------
            'experience' => $request->experience,
            'allexperienceDetails' => $request->experienceDetails,
//------------------------------------------------------------------
            ];
        $pdf = PDF::loadView('PDF-File', $data);
        return $pdf->download('CV.pdf');
    }
    
}
