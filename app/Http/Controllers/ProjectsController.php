<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Project;

class ProjectsController extends Controller
{
    // Index function
    public function index()
    {
      $projects = Project::all();
      return view('projects.index', compact('projects'));
    }

    // Show function
    public function create()
    {
      return view('projects.create');
    }

    // Store newly created resource
    public function store()
    {
      # code...
    }

    // display specified resource
    public function show(Project $project)
    {
      return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
      # code...
    }

    public function update(Project $project)
    {
      # code...
    }

    public function destroy(Project $project)
    {
      # code...
    }
}
