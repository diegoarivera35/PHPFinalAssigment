@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col">
        <div class="h1 display-2">
            View {{ $technology-> name}}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 p-1 m-1">
        <div class="card">
            <div class="card-title">
                <h2>{{ $technology->name}}</h2>
                <p>{{$technology->icon}}</p>
                <p>hola</p>
                <a href="{{ route('technologies.edit', $technology -> id ) }}" class="card-link btn btn-primary">Edit</a>
                <a href="{{ route('technologies.trash', $technology -> id )}}" class="card-link btn btn-primary">Delete</a>
            </div>
        </div>
    </div>
</div>

@endsection