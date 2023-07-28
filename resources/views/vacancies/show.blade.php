@extends('layouts.nav')
@section('content')
<div class="container">
    <div class="details py-5">
        <h3>{{ $vacancy->job_title }}</h3>
        <p>{{ $vacancy->location }} | {{ $vacancy->job_type }}</p>
        <p>{{ $vacancy->job_field }}</p>
        <p>Description: {{ $vacancy->description }}</p>
        <button class="btn btn-primary"><a href="{{ route('application.create', $vacancy) }}">Apply</a></button>
    </div>
</div>
@endsection
