<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href = "{{ asset('../css/nav.css')}}" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand">We-Recruit</a>
      <div class="d-class m-3">
        <a href="{{ route('vacancies.index') }}">Vacancies</a>
        <a href="">Explore</a>
        <a href="application.html">Community</a>
      </div>
    </div>
  </nav>
  <div>
      @yield('content')
  </div>
  <footer>
    <p>We-Recruit Pty Ltd 2022 - Phiwe Saba</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>