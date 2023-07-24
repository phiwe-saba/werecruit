<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Vacancy;

class ApplicationController extends Controller
{
    public function create(Vacancy $vacancy)
    {
        return view('application.create', compact('vacancy'));
    }

    public function store(Request $request, Vacancy $vacancy)
    {
        $viewData = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'upload_resume' => 'required|mimes:pdf,doc,docx|max:2048'
        ]);

        $resumePath = $request->file('upload_resume')->store('resumes');

        $application = new Application([
            'name' => $viewData['name'],
            'surname' => $viewData['surname'],
            'email' => $viewData['email'],
            'upload_resume' => $resumePath,
        ]);
 
        $vacancy->applications()->save($application);
        
        return redirect()->route('vacancies.edit')->with('success', 'Successfully applied.');
    }

    public function destroy(Application $applicant)
    {
        $applicant->delete();
        return redirect()->route('application.create')->with('success', 'Applicant deleted successfully');
    }
}
