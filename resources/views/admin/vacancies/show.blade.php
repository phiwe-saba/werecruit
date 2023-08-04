@extends('layouts.admin')
@section('title', "")
@section('content')
<div class="container">
    <h5 class="py-3">Vacancy Details</h5>
    
    <h3>Job Title: {{ $vacancy->job_title }}</h3>
    <p>Job Field: {{ $vacancy->job_field }}</p>
    <p>Location: {{ $vacancy->location }}</p>
    <p>Job Type: {{ $vacancy->job_type }}</p>
    <p>Description: {{ $vacancy->description }}</p>

    <button class="btn btn-primary"><a href="{{ route('admin.vacancies.edit', $vacancy->id) }}" style="color: white; text-decoration:none">Edit</a></button>
    <form action="{{ route('admin.vacancies.destroy', $vacancy->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <div class="card-body">
        
    </div>
</div>
@endsection