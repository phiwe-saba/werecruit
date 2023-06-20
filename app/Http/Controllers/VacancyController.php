<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;

class VacancyController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::all();
        return view('vacancies.index', compact('vacancies'));
    }

    public function create()
    {
        return view('cities.create');
    }

    public function store(Request $request)
    {
        $viewData = $request->validate([
            'job_title' => 'required',
            'job_field' => 'required',
            'location' => 'required',
            'job_type' => 'required'
        ]);

        $vacancy = Vacancy::create($viewData);

        return redirect()->route('vacancies.show', $vacancy->id);
    }

    public function show(vacancy $vacancy)
    {
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

        return redirect()->route('vacancies.index');
    }
}
