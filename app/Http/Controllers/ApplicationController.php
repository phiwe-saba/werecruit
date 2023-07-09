<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Vacancy;

class ApplicationController extends Controller
{
    public function index(Vacancy $vacancy)
    {
        //$applicants = Applicant::all();
        //$applicants = Application::with('vacancies')->get();
        return view('application.index', compact('vacancy'));
    }

    public function create(Vacancy $vacancy)
    {
        return view('application.create', compact('vacancy'));
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
            $upload_resume = $request->file('upload_resume');
            $fileName = time() . '_' . $upload_resume->getClientOriginalName();
            $upload_resume->storeAs('uploads', $fileName);
            $viewData['upload_resume'] = $fileName;
        }
        
        $vacancy = Vacancy::findOrFail($request->vacancy_id);
        
        $application = new Application($viewData);
        $application->vacancy()->associate($vacancy);
        $application->save();

        //$vacancy->applications()->create($viewData);
        //$applicant = Application::create($viewData);
        dd($application);
        return redirect()->route('vacancies.index')->with('success', 'Successfully applied.');
    }

    public function destroy(Application $applicant)
    {
        $applicant->delete();
        return redirect()->route('application.index')->with('success', 'Applicant deleted successfully');
    }
}
