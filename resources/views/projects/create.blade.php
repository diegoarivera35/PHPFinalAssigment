@extends('layouts.admin');
@section('content')

<div class="row">
    <div class="col d-flex justify-content-center">
        <div class="h1 display-2">
            Enter a new Project
        </div>
    </div>
</div>

<div class="row d-flex justify-content-center">
    <div class="col-md-6">
    <form action="{{ route('projects.create')}}" method="POST">

    @if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif

    {{ csrf_field() }}

    <div class="form-group mb-3">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="forstNameHelp" placeholder="Enter name">
  </div>


  <div class="form-group mb-3">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" aria-describedby="descriptionhelp" placeholder="Enter description">
  </div>



  <div class="form-group mb-3">
    <label for="URL">URL</label>
    <input type="text" class="form-control" id="URL" name="URL" aria-describedby="URLHelp" placeholder="Enter URL">
  </div>



  <div class="form-group mb-3">
    <label for="imageURL">image URL</label>
    <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="imageURLHelp" placeholder="Enter imageURL">
  </div>




  <div class="form-group mb-3">
    <label for="GitHub">GitHub</label>
    <input type="text" class="form-control" id="GitHub" name="GitHub" aria-describedby="GitHubHelp" placeholder="Enter GitHub">
  </div>





  <div class="form-group mb-3">
    <label for="Behance">Behance</label>
    <input type="text" class="form-control" id="Behance" name="Behance" aria-describedby="BehanceHelp" placeholder="Enter Behance">
  </div>





  <div class="form-group mb-3">
    <label for="Figma">Figma</label>
    <input type="text" class="form-control" id="Figma" name="Figma" aria-describedby="FigmaHelp" placeholder="Enter Figma">
  </div>











  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>

@endsection