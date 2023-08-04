@extends('layouts.admin')
@section('title', "")
@section('content')
<div class="container">
    <h5 class="py-3">Manage Applications</h5>
    <table class="admin table table-hover">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Email</th>
                <th scope="col">Title</th>
                <th scope="col">Field</th>
                <th scope="col">Location</th>
                <th scope="col">Type</th>
                <th scope="col">Accept</th>
                <th scope="col">Reject</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applications as $applicant)
                <tr>
                    <td>{{ $applicant->name }}</td>
                    <td>{{ $applicant->surname }}</td>
                    <td>{{ $applicant->email }}</td>
                    <td>{{ $applicant->vacancy->job_title }}</td>
                    <td>{{ $applicant->vacancy->job_field }}</td>
                    <td>{{ $applicant->vacancy->location }}</td>
                    <td>{{ $applicant->vacancy->job_type }}</td>
                    <td>
                        <button class="btn btn-success">
                            <i class="bi bi-check2-square"></i>
                        </button>
                    </td>
                    <td>
                        <form action="{{ route('admin.applications.destroy', $applicant->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="bi bi-x-square"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection