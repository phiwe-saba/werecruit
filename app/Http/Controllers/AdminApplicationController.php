<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class AdminApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all();
        return view('admin.applications.index', compact('applications'));
    }
}
