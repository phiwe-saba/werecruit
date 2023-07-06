<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href = "{{ asset('../css/app.css')}}" rel="stylesheet"/>
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
</body>
</html>