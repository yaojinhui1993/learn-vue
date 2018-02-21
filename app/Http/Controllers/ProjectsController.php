<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    /**
     * Show the projects create page.
     */
    public function create()
    {
        return view('projects.create', [
            'projects' => Project::latest()->take(3)->get(),
        ]);
    }

    /**
     * Store a new project in the database;
     */
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Project::forceCreate($data);

        return ['message' => 'Project created'];
    }
}
