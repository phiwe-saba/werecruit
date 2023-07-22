<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class AdminApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::with('vacancy')->get();
        return view('admin.applications.index', compact('applications'));
    }

    public function destroy($id)
    {
        $applications = Application::findOrFail($id);
        $applications->delete();

        return redirect()->route('admin.applications.index')->with('success', 'Vacancy deleted successfully!');
    }
}
