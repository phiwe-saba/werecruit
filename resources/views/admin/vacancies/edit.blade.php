@extends('layouts.admin')
@section('title', "")
@section('content')
    <div class="container">
        <div class="card-header">
            Edit Details
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.vacancies.update', $vacancy->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Job Title:</label>
                    <input name="job_title" value="{{$vacancy->job_title}}" id="job_title" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Job Field:</label>
                    <input name="job_field" value="{{$vacancy->job_field}}" id="job_field" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Location:</label>
                    <input name="location" value="{{$vacancy->location}}" id="location" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Job Type:</label>
                    <input name="job_type" value="{{$vacancy->job_type}}" id="job_type" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description:</label>
                    <input name="description" value="{{$vacancy->description}}" id="description" type="text" class="form-control" rows="3" required>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection
