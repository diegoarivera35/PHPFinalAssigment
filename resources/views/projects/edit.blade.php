@extends('layouts/admin')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="display-2"> Update Project </h1>
    </div>
</div>

<div class="row">
    <form action="{{ route('projects.update', $project->id) }}" method="PUT">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- {{ csrf_field() }} -->

        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="forstNameHelp" placeholder="Enter name" value="{{ $project -> name}}">
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" aria-describedby="descriptionhelp" placeholder="Enter description" value="{{ $project -> description}}">
        </div>

        <div class="form-group mb-3">
            <label for="URL">URL</label>
            <input type="text" class="form-control" id="URL" name="URL" aria-describedby="URLHelp" placeholder="Enter URL" value="{{ $project -> URL}}">
        </div>

        <div class="form-group mb-3">
            <label for="imageURL">image URL</label>
            <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="imageURLHelp" placeholder="Enter imageURL"  value="{{ $project -> imageURL }}">
        </div>

        <div class="form-group mb-3">
            <label for="GitHub">GitHub</label>
            <input type="text" class="form-control" id="GitHub" name="GitHub" aria-describedby="GitHubHelp" placeholder="Enter GitHub"  value="{{ $project -> GitHub}}">
        </div>

        <div class="form-group mb-3">
            <label for="Behance">Behance</label>
            <input type="text" class="form-control" id="Behance" name="Behance" aria-describedby="BehanceHelp" placeholder="Enter Behance"  value="{{ $project -> Behance }}">
        </div>

        <div class="form-group mb-3">
            <label for="Figma">Figma</label>
            <input type="text" class="form-control" id="Figma" name="Figma" aria-describedby="FigmaHelp" placeholder="Enter Figma"  value="{{ $project -> Figma }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection


