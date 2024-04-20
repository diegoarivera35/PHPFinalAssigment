@extends('layouts.admin');
@section('content')

<div class="row">
    <div class="col">
        <div class="h3 display-2">
            All Technologies
        </div>
    </div>
</div>

<div class="row">
    @foreach ($technologies as $technology)
    <div class="col-md-2 p-1 m-1">
        <div class="card p-2 bg-light">
            <div class="card-title">
                <h4>{{ $technology->name}}</h2>
                <p>{{$technology->icon}}</p>

                <a class="btn btn-primary" href="{{ route('technologies.trash', $technology -> id )}}" class="card-link">Delete</a>


                <a href="{{ route('technologies.edit', $technology -> id )}}" class="btn btn-primary">Edit</a>

            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection