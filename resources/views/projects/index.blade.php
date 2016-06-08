@extends('app')

@section('content')

  <div class="panel panel-default">
     <div class="panel-heading">
       Project list
     </div>
  @if ( !$projects->count() )
     <div class="alert alert-danger" role="alert">You have no projects!</div>
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
         @foreach( $projects as $project)
         <tr>
           <td>{{$project->id}}</td>
           <td><a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a></td>
           <td>{{$project->created_at}}</td>
           <td>{{$project->updated_at}}</td>
         </tr>

         @endforeach
       </tbody>

   </table>
</div>
  @endif
@endsection
