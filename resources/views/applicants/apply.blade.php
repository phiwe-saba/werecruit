@extends('layouts.apply')
@section('content')
<div class="container">
    <form id="appointment-form">
        <h2><a href="./index.html">We - Recruit</a></h2>
        <div class="form-group">
          <label for="name">First name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="last_name">Last name:</label>
          <input type="text" id="last_name" name="last_name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="file">Upload resume:</label>
          <input type="file" id="file" name="file" required>
        </div>
        <div class="form-group">
          <button type="submit">Apply</button>
        </div>
    </form>
</div>
@endsection