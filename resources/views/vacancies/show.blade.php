@extends('layouts.nav')
@section('content')
<div class="container">
    <h3>Job Title: {{ $vacancy->job_title }}</h3>
    <p>Job Field: {{ $vacancy->job_field }}</p>
    <p>Location: {{ $vacancy->location }}</p>
    <p>Job Type: {{ $vacancy->job_type }}</p>
    <p>Description: {{ $vacancy->description }}</p>
    <button class="btn btn-primary"><a href="{{ route('application.create', $vacancy) }}">Apply</a></button>
</div>
@endsection