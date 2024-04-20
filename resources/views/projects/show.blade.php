@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col">
        <div class="h1 display-2">
            View {{ $project-> name}}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 p-1 m-1">
        <div class="card">
            <div class="card-title">
                <h2>{{ $project->name}}</h2>
                <p>{{$project->description}}</p>
                <p>hola</p>
                <a href="{{ route('projects.edit', $project -> id ) }}" class="card-link btn btn-primary">Edit</a>
                <a href="{{ route('projects.trash', $project -> id )}}" class="card-link btn btn-primary">Delete</a>
            </div>
        </div>
    </div>
</div>

@endsection