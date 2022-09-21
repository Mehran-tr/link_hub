<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>{{$pageTitle}}</title>



    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"  crossorigin="anonymous">



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


</head>
<body>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">In this Website you can save and share your links</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Follow us</h4>
                    <ul class="list-unstyled">
                        <li><a target="_blank" href="https://github.com/Mehran-tr/" class="text-white">Mehran Taheri</a></li>
                        <li><a target="_blank" href="https://github.com/usermp" class="text-white">Mohammad Yeganeh</a></li>
                        <li><a target="_blank" href="#" class="text-white">Follow Us on Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="{{route('index')}}" class="navbar-brand d-flex align-items-center">
                <strong>{{$headerTitle}}</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<main>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">+ {{$linkCount}} {{$headerTitle}}</h1>
                <p class="lead text-muted">{{$headerText}}</p>
                <p>
                    <a href="{{route('create')}}" class="btn btn-primary my-2">Submit New Article</a>
                    <a href="#" class="btn btn-secondary my-2">Donate US</a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        @yield('content')
    </div>

</main>

<footer class="text-muted py-5">
    <div class="container">
        <p class="float-end mb-1">
            <a href="#">Back to top</a>
        </p>
        <p class="mb-1">Developed by : <a target="_blank" href="https://mehrantaheri.ir">Mehran Taheri</a> | <a target="_blank" href="https://mpdev.ir/">Mohammad Yeganeh</a></p>
    </div>
</footer>

<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>

<script src="{{asset('bootstrap/js/form-validation.js')}}"></script>

</body>
</html>
