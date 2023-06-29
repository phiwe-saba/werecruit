<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicants = Applicant::all();

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
            'path' => 'required|mimes:pdf,doc,docx'
        ]);

        $applicantFile = $request->file('path');
        $applicantName = $applicantFile->getClientOriginalName();
        $filePath = $applicantFile->storeAs('uploads', $applicantName);

        Applicant::create([
            'path' => $filePath,
        ]);
    }
}
