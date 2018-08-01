<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('pages.projects', [
            'projects' => Project::all(),
        ]);
    }

    public function showProject($slug)
    {
        return view('pages.project-show',[
            'project' => Project::where('slug', $slug)->firstOrFail(),
        ]);
    }
}
