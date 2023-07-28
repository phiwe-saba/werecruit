@extends('layouts.admin')
@section('title', "")
@section('content')
<div class="container">
    
    <h5 class="py-3">Create Vacancy</h5>

    @if($errors->any())
    <ul class="alert alert-danger list-unstyled">
        @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
        @endforeach
    </ul>
    @endif

    {{-- Message --}}
    @if (Session::has('success'))
      <div class="alert alert-success alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss = "alert">
            <i class="fa fa-times"></i>
        </button>
        <strong> Success !!</strong> {{ session('success') }}
      </div>
    @endif

    <form method="POST" action="{{ route('admin.vacancies.store') }}" encrypt="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label for="job_title" class="form-label">Job Title:</label>
            <input name="job_title" id="job_title" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="job_field" class="form-label">Job Field:</label>
            <input name="job_field" id="job_field" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location:</label>
            <input name="location" id="location" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="job_type" class="form-label">Job Type:</label>
            <input name="job_type" id="job_type" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input name="description" id="description" type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary my-3">Submit</button>
    </form>
</div>
@endsection