<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Applicant;

class VacancyController extends Controller
{
    public function index(Request $request)
    {
        $vacancies = Vacancy::all();

        $job_title = $request->input('job_title');
        $location = $request->input('location');
        $job_type = $request->input('job_type');

        $query = Vacancy::query();

        if($job_title){
            $query->where('job_title', 'LIKE', "%job_title%");
        }

        if($location){
            $query->where('location', $location);
        }

        if($job_type){
            $query->where('job_type', $job_type);
        }

        $vacancies = $query->get();
        
        return view('vacancies.index', compact('vacancies'));
    }

    public function store(Request $request)
    {
        $viewData = $request->validate([
            'job_title' => 'required',
            'job_field' => 'required',
            'location' => 'required',
            'job_type' => 'required'
        ]); 

        return redirect()->route('vacancies.show')->with('success', 'Vacancy created successfully.');;
    }

    public function show(Vacancy $vacancy, $id)
    {
        $vacancy = Vacancy::findOrFail($id);
        return view('vacancies.show', compact('vacancy'));
    }

    public function edit($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        return view('vacancies.edit', compact('vacancy'));
    }

    public function destroy($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        $vacancy->delete();

        return redirect()->route('vacancies.index')->with('success', 'Vacancy created successfully.');;
    }
}
