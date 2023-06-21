<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vacancy;

class AdminVacancyController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::all();
        return view('admin.vacancies.index', compact('vacancies'));
    }

    public function create()
    {
        return view('admin.vacancies.create');
    }

    public function store(Request $request)
    {
        $viewData = $request->validate([
            'job_title' => 'required',
            'job_field' => 'required',
            'location' => 'required',
            'job_type' => 'required',
            'description' => 'required'
        ]);

        $vacancy = Vacancy::create($viewData);

        return redirect()->route('admin.vacancies.show', $vacancy->id);
    }

    public function show(vacancy $vacancy)
    {
        return view('admin.vacancies.show', compact('vacancy'));
    }

    public function edit($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        return view('admin.vacancies.edit', compact('vacancy'));
    }

    public function destroy($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        $vacancy->delete();

        return redirect()->route('admin.vacancies.index');
    }
}
