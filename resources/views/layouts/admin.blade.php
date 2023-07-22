<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous" />
    <link href = "{{ asset('../css/admin.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>We - Recruit</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">We - Recruit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.vacancies.index') }}">Manage Vacancies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.applications.index') }}">Manage Applications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.applications.index') }}">Logout</a>
                    </li>
                </ul>
            </div>    
        </div>
    </nav>
    <div>
        @yield('content')
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
