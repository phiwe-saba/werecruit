@extends('layouts.admin')
@section('title', "")
@section('content')
<div class="container">
    <div class="card-header py-3">
        Manage Vacancies
        <button class="btn btn-primary mt-5">
            <a href="{{route('admin.vacancies.create')}}">Create Job</a>
        </button>
    </div>
    <div class="card-body">
        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th scope="col">Job Title</th>
                    <th scope="col">Job Field</th>
                    <th scope="col">Location</th>
                    <th scope="col">Job Type</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vacancies as $vacancy)
                    <tr>
                        <td>{{ $vacancy->job_title }}</td>
                        <td>{{ $vacancy->job_field }}</td>
                        <td>{{ $vacancy->location }}</td>
                        <td>{{ $vacancy->job_type }}</td>
                        
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.vacancies.edit', $vacancy->id) }}">
                                <i class="bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('admin.vacancies.destroy', $vacancy->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <i class="bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection