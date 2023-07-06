<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\Vacancy;

class ApplicantController extends Controller
{
    public function index()
    {
        //$applicants = Applicant::all();
        $applicants = Applicant::with('vacancies')->get();
        return view('applicants.index', compact('applicants'));
    }

    public function create(Vacancy $vacancy)
    {
        return view('applicants.create', compact('vacancy'));
    }

    public function store(Request $request)
    {
        $viewData = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'upload_resume' => 'required|mimes:pdf,doc,docx|max:2048'
        ]);

        if($request->hasFile('upload_resume')){
            $upload_resume = $request->upload_file('upload_resume');
            $fileName = time() . '_' . $upload_resume->getClientOriginalName();
            $upload_resume->storeAs('uploads', $fileName);
            $viewData['upload_resume'] = $fileName;
        }
        
        $applicant = Applicant::create($viewData);
        dd($applicant);
        return redirect()->route('applicants.index')->with('success', 'Successfully applied.');
    }

    public function destroy(Applicant $applicant)
    {
        $applicant->delete();
        return redirect()->route('applicants.apply')->with('success', 'Applicant deleted successfully');
    }
}
