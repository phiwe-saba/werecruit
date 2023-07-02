@extends('layouts.apply')
@section('content')
  <div class="container">
    <form method="POST" encrypt="multipart/form-data">
      @csrf  
      <h2><a href="{{ route('vacancies.index') }}">We - Recruit</a></h2>
        <select name="vacancy_id" id="vacancy_id" required>
          @foreach ($vacancies as $vacancy)
              <option value="{{ $vacancy->id }}">{{ $vacancy->job_title }}</option>
          @endforeach
        </select>
        <div class="form-group">
          <label for="name">First name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="last_name">Last name:</label>
          <input type="text" id="surname" name="surname" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="file">Upload resume:</label>
          <input type="file" id="file_upload" name="file_upload" required>
        </div>
        <div class="form-group">
          <button type="submit">Apply</button>
        </div>
    </form>
  </div>
@endsection