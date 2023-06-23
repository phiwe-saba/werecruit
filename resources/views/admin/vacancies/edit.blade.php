@extends('layouts.admin')
@section('title', "")
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Edit Vacancy
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
                <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form method="POST" action="{{ route('admin.vacancies.update', $vacancy->id) }}" encrypt="multipart/form-data">
            @csrf

            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Job Title:</label>
                <input name="job_title" value="{{$vacancy->job_title}}" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Job Field:</label>
                <input name="job_field" value="{{$vacancy->job_field}}" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Location:</label>
                <input name="location" value="{{$vacancy->location}}" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Job Type:</label>
                <input name="job_type" value="{{$vacancy->job_type}}" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Description:</label>
                <input name="description" value="{{$vacancy->description}}" type="text" class="form-control" rows="3">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div> 
@endsection
