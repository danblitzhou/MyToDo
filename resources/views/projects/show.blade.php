@extends('app')

@section('content')

<div class="panel panel-default">
   <div class="panel-heading">
     {{ $project->name}} 's tasks
   </div>
@if ( !$project->tasks->count() )
   <div class="alert alert-danger" role="alert">{{ $project->name }} has no tasks. </div>
@else
   <table class="table">
     <thead>
       <tr>
         <th>#</th>
         <th>Name</th>
         <th>Created at</th>
         <th>Last updated</th>
       </tr>
     </thead>
     <tbody>
       @foreach( $project->tasks as $task)
       <tr>
         <td>{{$task->id}}</td>
         <td><a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}">{{ $task->name }}</a></td>
         <td>{{$task->created_at}}</td>
         <td>{{$task->updated_at}}</td>
       </tr>

       @endforeach
     </tbody>

 </table>
</div>
  @endif
@endsection
