@extends('layouts.nav')
@section('content')

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