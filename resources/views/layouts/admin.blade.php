<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous" />
    <link href = "{{ asset('../css/admin.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>@yield('title', 'Admin - Online Store')</title>
</head>
<body>
<div class="row g-0">
       
    <div class="col content-grey">
        <nav class="navbar bg-body-tertiary">
            <div class="container">
              <a href="{{ route('vacancies.index') }}" class="navbar-brand">We - Recruit</a>
              <div class="d-class m-3">
                <a href="{{ route('admin.vacancies.index') }}">Manage Vacancies</a>
                <a href="application.html">Logout</a>
              </div>
            </div>
          </nav>
        <div class="g-0 m-5">
            @yield('content')
        </div>
    </div>
</div>
<!-- footer -->
<footer>
    <p>We-Recruit Pty Ltd 2023 - Phiwe Saba</p>
</footer>
<!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>
</html>