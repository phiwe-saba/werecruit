@extends('layouts.nav')
@section('content')


    <div class="search-bar">
        <div class="header-section">
            <h1>Find your next job or internship</h1>
            <p>Explore available jobs</p>
        </div>
        <div class="content-bar">
            <form action="{{ route('vacancies.index') }}" method="GET">
                <input type="text" name="job_title" placeholder="Job title" value="{{ request('job_title') }}">
                <select name="location" class="location">
                    <option selected="">Select location</option>
                    <option value="Gauteng" {{ request('location') === 'Gauteng' ? 'selected' : ''}}>Gauteng</option>
                    <option value="Cape Town" {{ request('location') === 'Cape Town' ? 'selected' : ''}}>Cape Town</option>
                    <option value="Durban" {{ request('location') === 'Durban' ? 'selected' : ''}}>Durban</option>
                    <option value="Gauteng" {{ request('location') === 'Gauteng' ? 'selected' : ''}}>Gauteng</option>
                    <option value="Port Elizabeth" {{ request('location') === 'Port Elizabeth' ? 'selected' : ''}}>Port Elizabeth</option>
                    <option value="Northen Cape" {{ request('location') === 'Northen Cape' ? 'selected' : ''}}>Northen Cape</option>
                </select>
                <select name="job_type" class="job-type">
                    <option selected="">Select job type</option>
                    <option value="Hybrid" {{ request('job_type') === 'Hybrid' ? 'selected' : ''}}>Hybrid</option>
                    <option value="Remote" {{ request('job_type') === 'Remote' ? 'selected' : ''}}>Remote</option>
                    <option value="On-site" {{ request('job_type') === 'On-site' ? 'selected' : ''}}>On-site</option>
                </select>
                <button type="submit">Search</button>  
            </form>
        </div>
    </div>

<div class="container">
    @foreach($vacancies as $vacancy)
        <div class="card">
            <div class="card-body">
                <a href="{{ route('vacancies.show', ['id'=>$vacancy["id"]])}}">
                    <h2>{{ $vacancy->job_title}}</h2>
                    <p>{{ $vacancy->job_field}}</p>
                    <p>{{ $vacancy->job_type}} | {{ $vacancy->location}}</p>
                    <a class="btn btn-primary" href="{{ route('applicants.apply') }}">Apply</a>
                </a>
            </div>
        </div>
    @endforeach
</div>
@endsection