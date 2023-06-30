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
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'resume' => 'required|mimes:pdf,doc,docx'
        ]);

        //$applicantFile = $viewData->file('resume');
        //$applicantName = $applicantFile->getClientOriginalName();
        //$filePath = $applicantFile->storeAs('uploads', $applicantName);

        /*$vacancy = Applicant::create('');
        Applicant::create([
            'path' => $filePath,
        ]);*/
    }

    /*public function update(Request $request, Applicant $applicant)
    {
        $applicant->vacancies()->sync($request->input('vacancy_ids'));

        return redirect()->route('applicants.index');
    }*/
}
