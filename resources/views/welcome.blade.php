<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href = "{{ asset('../css/nav.css')}}" rel="stylesheet"/>
    <title>We - Recruit | Welcome</title>
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
                        <a class="nav-link" href="{{ route('vacancies.index') }}">Vacancies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.vacancies.index') }}">Manage Vacancies</a>
                    </li>
                </ul>
            </div>    
        </div>
    </nav>
    <div class="header-container">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 p-5">
                    <h1>The job of your dreams awaits you!</h1>
                    <p>Join a network of the world's best developers & get full-time, long-term remote software jobs with better compensation and career growth.</p>
                    <button class="btn btn-primary btn-lg m-1">Get started</button>
                </div>
                <div class="col-lg-6">
                    <img src=" {{ asset('/images/iStock.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="d-flex justify-content-around mb-3">
            <div class="p-2">
                <h3>Browse jobs</h3><hr/>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui officia fugit iure ullam, est quasi aliquid distinctio incidunt magnam quas, deleniti aliquam in aut quidem, deserunt nostrum perferendis architecto nulla.</p>
            </div>
            <div class="p-2">
                <h3>Receive job offer</h3><hr/>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui officia fugit iure ullam, est quasi aliquid distinctio incidunt magnam quas, deleniti aliquam in aut quidem, deserunt nostrum perferendis architecto nulla.</p>
            </div>
            <div class="p-2">
                <h3>Start working</h3><hr/>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui officia fugit iure ullam, est quasi aliquid distinctio incidunt magnam quas, deleniti aliquam in aut quidem, deserunt nostrum perferendis architecto nulla.</p>
            </div>
            <div class="p-2">
                <h3>Start working</h3><hr/>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui officia fugit iure ullam, est quasi aliquid distinctio incidunt magnam quas, deleniti aliquam in aut quidem, deserunt nostrum perferendis architecto nulla.</p>
            </div>
        </div>
    </div>
    <div class="job-container">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 p-4">
                    <img src=" {{ asset('/images/community.jpg') }}" alt="">
                </div>
                <div class="col-lg-8 p-4">
                    <h1>Let us help you find your next career.</h1>
                    <p>Explore over one million jobs and internships that are updated daily. 
                       Easily search, apply and start your career on We-Recruit’s job board.
                       engagements are full-time and long-term. As one project nears completion, our team goes to work to identify the next one for you within weeks.
                    </p>
                    <button class="btn btn-primary btn-lg m-1">
                        <a href="{{ route('vacancies.index') }}">Find vacancies.</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-container">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8 py-5">
                    <h1>Join the community of best engineers</h1>
                    <p>Sign-up to our blog to be updated on the latest jobs and newsletter. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                       Incidunt fugit eligendi quae, explicabo laudantium dignissimos tempora, ipsum suscipit voluptas est nihil impedit doloribus quasi porro, necessitatibus nemo ad officia cum.
                    </p>
                    <button class="btn btn-primary btn-lg m-1">
                        <a href="{{ route('vacancies.index') }}">Join our blog.</a>
                    </button>
                </div>
                <div class="col-lg-4">
                    <img src=" {{ asset('/images/community.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>We-Recruit Pty Ltd 2022 - Phiwe Saba</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>