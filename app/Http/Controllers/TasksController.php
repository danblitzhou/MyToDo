<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Project;
use App\Task;

class TasksController extends Controller
{
  // Index function
  public function index(Project $project)
  {
    return view('tasks.index', compact('project'));
  }

  // Show function
  public function create(Project $project)
  {
    return view('tasks.create', compact('project'));
  }

  // Store newly created resource
  public function store(Project $project)
  {
    # code...
  }

  // display specified resource
  public function show(Project $project, Task $task)
  {
    return view('tasks.show', compact('project', 'task'));
  }

  public function edit(Project $project, Task $task)
  {
    # code...
  }

  public function update(Project $project, Task $task)
  {
    # code...
  }

  public function destroy(Project $project, Task $task)
  {
    # code...
  }
}
