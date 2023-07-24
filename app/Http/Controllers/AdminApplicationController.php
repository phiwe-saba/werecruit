<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class AdminApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::with('vacancy')->get();
        //dd($applications);
        return view('admin.applications.index', compact('applications'));
    }

    public function show()
    {
        return view('admin.applications.show');
    }
    
    public function destroy($id)
    {
        $applications = Application::findOrFail($id);
        $applications->delete();

        return redirect()->route('admin.applications.index')->with('success', 'Application rejected successfully!');
    }
}
