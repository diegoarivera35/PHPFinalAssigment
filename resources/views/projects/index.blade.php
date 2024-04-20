
@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <div class="h3 display-2">
            All Projects
        </div>
    </div>
</div>

<div class="row">
    @foreach ($projects as $project)
    <div class="col-md-2 p-1 m-1">
        <div class="card p-2 bg-light">
            <div class="card-title">
                <h4>{{ $project->name}}</h2>
                <p>{{$project->description}}</p>
                <p>{{$project->URL}}</p>
                <p>{{$project->imageURL}}</p>
                <p>{{$project->GitHub}}</p>
                <p>{{$project->Behance}}</p>
                <p>{{$project->Figma}}</p>
                <a class="btn btn-primary" href="{{ route('projects.trash', $project -> id )}}" class="card-link">Delete</a>



                <a href="{{ route('projects.edit', $project -> id )}}" class="btn btn-primary">Edit</a>

            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
