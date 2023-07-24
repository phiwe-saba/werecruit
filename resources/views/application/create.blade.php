@extends('layouts.main')
@section('content')
  <div class="container">
    <div class="d-flex justify-content-center">
      <form method="POST" action="{{ route('application.store', $vacancy) }}" enctype="multipart/form-data">
        @csrf  
        <h2><a href="{{ route('vacancies.index') }}">We - Recruit</a></h2>
          
          <div class="form-group">
            <label for="name">First name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="last_name">Last name:</label>
            <input type="text" id="surname" name="surname" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="file">Upload resume:</label>
            <input type="file" id="upload_resume" name="upload_resume" class="form-control" required>
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit">Apply</button>
          </div>
      </form>
    </div>
  </div>
@endsection