@extends('layouts.admin')
@section('title', "")
@section('content')

    <h1>Vacancy Details</h1>

    <h1>Job Title: {{ $vacancy->job_title }}</h1>
    <p>Job Field: {{ $vacancy->job_field }}</p>
    <p>Location: {{ $vacancy->location }}</p>
    <p>Job Type: {{ $vacancy->job_type }}</p>
    <p>Description: {{ $vacancy->description }}</p>

@endsection