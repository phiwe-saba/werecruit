<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicants = Applicant::all();

        return view('applicants.apply', compact('applicants'));
    }

    public function create()
    {
        return view('applicants.create');
    }

    public function store(Request $request)
    {
        $viewData = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'upload_resume' => 'required|mimes:pdf,doc,docx'
        ]);

        if($request->hasFile('upload_resume')){
            $upload_resume = $request->upload_file('upload_resume');
            $fileName = time() . '_' . $upload_resume->getClientOriginalName();
            $upload_resume->storeAs('uploads', $fileName);
            $viewData['upload_resume'] = $fileName;
        }
        
        Applicant::create($viewData);

        return redirect()->route('applicants.apply')->with('success', 'Successfully applied.');
    }

    /*public function update(Request $request, Applicant $applicant)
    {
        $applicant->vacancies()->sync($request->input('vacancy_ids'));

        return redirect()->route('applicants.index');
    }*/
}
