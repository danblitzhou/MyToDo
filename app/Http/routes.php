<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Resources
Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');

// Provide controller methods with object instead of IDs
Route::model('tasks', 'Task');
Route::model('projects', 'Project');

// Set slug based URLs
Route::bind('tasks', function ($value, $route)
{
  return App\Task::whereSlug($value)->first();
});

Route::bind('projects', function ($value, $route)
{
  return App\Project::whereSlug($value)->first();
});
