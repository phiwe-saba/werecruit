@extends('layouts.nav')
@section('content')


    <div class="search-bar">
        <div class="header-section">
            <h1>Find your next job or internship</h1>
            <p>Explore available jobs</p>
        </div>
        <div class="content-bar">
            <input type="text" placeholder="Job title">
            <select class="location">
                <option selected="">Select location</option>
                <option value="1">Gauteng</option>
                <option value="2">Cape Town</option>
                <option value="3">Durban</option>
                <option value="3">Port Elizabeth</option>
                <option value="3">Northern Cape</option>
            </select>
            <select class="job-type">
                <option selected="">Select job type</option>
                <option value="1">Hybrid</option>
                <option value="2">Remote</option>
                <option value="3">On-site</option>
            </select>
            <button type="submit">Search</button>  
        </div>
    </div>

<div class="container">
    @foreach($vacancies as $vacancy)
        <div class="card">
            <a href="{{ route('vacancies.show', ['id'=>$vacancy["id"]])}}">
                <h2>{{ $vacancy->job_title}}</h2>
                <p>{{ $vacancy->job_field}}</p>
                <p>{{ $vacancy->job_type}} | {{ $vacancy->location}}</p>
                <button>Apply</button>
            </a>
        </div>
    @endforeach
</div>
@endsection