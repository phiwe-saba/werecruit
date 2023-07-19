@extends('layouts.admin')
@section('title', "")
@section('content')
<div class="container">
    @foreach($applications as $applicant)
        <tr>
            <td>{{ $applicant->name }}</td>;
            <td>{{ $applicant->surname }}</td>;
            <td>{{ $applicant->email }}</td>;
            <td>{{ $applicant->upload_resume }}</td>;
        </tr>
    @endforeach
</div>
@endsection