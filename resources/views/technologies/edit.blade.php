@extends('layouts/admin')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="display-2"> Update Technology </h1>
    </div>
</div>

<div class="row">
    <form action="{{ route('technologies.update', $technology->id) }}" method="PUT">
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
            <input type="text" class="form-control" id="name" name="name" aria-describedby="forstNameHelp" placeholder="Enter name" value="{{ $technology -> name}}">
        </div>

        <div class="form-group mb-3">
            <label for="description">Icon</label>
            <input type="text" class="form-control" id="icon" name="icon" aria-describedby="iconhelp" placeholder="Enter icon" value="{{ $technology -> icon}}">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection


