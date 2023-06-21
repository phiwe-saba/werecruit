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
            <a href="">Vacancies</a>
            <a href="">Explore</a>
            <a href="application.html">Community</a>
          </div>
        </div>
    </nav>
    <div class="header">
        <div class="container">
            <div>
                <h1>Land your first job with us!</h1>
                <p>Join a network of the world's best developers & get full-time, long-term remote software jobs with better compensation and career growth.</p>
                <button>Apply now</button>
            </div>
            <img src=" {{ asset('/images/iStock.jpg') }}" alt="">
        </div>
    </div>
    <div class="main-section">
        <div class="container">
            <div class="box">
                <h3>Browse jobs</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui officia fugit iure ullam, est quasi aliquid distinctio incidunt magnam quas, deleniti aliquam in aut quidem, deserunt nostrum perferendis architecto nulla.</p>
            </div>
            <div class="box">
                <h3>Receive job offer</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui officia fugit iure ullam, est quasi aliquid distinctio incidunt magnam quas, deleniti aliquam in aut quidem, deserunt nostrum perferendis architecto nulla.</p>
            </div>
            <div class="box">
                <h3>Start working</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui officia fugit iure ullam, est quasi aliquid distinctio incidunt magnam quas, deleniti aliquam in aut quidem, deserunt nostrum perferendis architecto nulla.</p>
            </div>
            <div class="box">
                <h3>Start working</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui officia fugit iure ullam, est quasi aliquid distinctio incidunt magnam quas, deleniti aliquam in aut quidem, deserunt nostrum perferendis architecto nulla.</p>
            </div>
        </div>
    </div>
    <div class="body-section">
        <div class="container">
            <img src=" {{ asset('/images/community.jpg') }}" alt="">
            <div id="text">
                <h1>Let us help you find your next career.</h1>
                <p>Explore over one million jobs and internships that are updated daily. 
                   Easily search, apply and start your career on We-Recruit’s job board.
                   engagements are full-time and long-term. As one project nears completion, our team goes to work to identify the next one for you within weeks.
                </p>
                <button><a href="vacancies.html">Find vacancies.</a></button>
            </div>
        </div>
    </div>
    <div class="blog-section">
        <div class="container">
            <div id="text">
                <h1>Join the community of best remote engineers</h1>
                <p>Sign-up to our blog to be updated on the latest jobs and newsletter. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                   Incidunt fugit eligendi quae, explicabo laudantium dignissimos tempora, ipsum suscipit voluptas est nihil impedit doloribus quasi porro, necessitatibus nemo ad officia cum.</p>
                <button><a href="blog.html">Join our blog!!</a></button>
            </div>
            <img src=" {{ asset('/images/community.png') }}" alt="">
        </div>
    </div>
    <footer>
        <p>We-Recruit Pty Ltd 2022 - Phiwe Saba</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>