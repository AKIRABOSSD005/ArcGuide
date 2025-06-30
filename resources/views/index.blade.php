<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcGuide: Tourism Hub for San Miguel Bulacan</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <div class="wrapper">
        <nav class="navbar navbar-expand-lg bg-body-light px-5">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand mx-auto" href="{{ url('/') }}" onclick="reloadPage()">
                    <img src="{{ asset('assets/icons/logo.svg') }}" alt="Logo" class="logo d-inline-block align-text-top" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <!-- Example nav items -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About San Miguel</a>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/spots') }}">Tourists Spots</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/maps') }}">Maps</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/events') }}">Events</a>

                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="main">
            <div class="hero-section d-flex align-items-center" id="home">
                <div class="hero-content w-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-10 col-md-8 col-lg-7 text-start">
                                <h1 class="display-3 fw-bold mb-3" style="color: #fff;">
                                    Tourism Hub for<br>San Miguel, Bulacan
                                </h1>
                                <p class="lead mb-4" style="color: #fff;">
                                    Welcome to ArchGuide – Your Gateway to Discovering San Miguel, Bulacan
                                </p>
                                <a class="btn btn-lg btn-explore" href="#about">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Place after the hero-section in index.blade.php -->
            <section class="info-section py-5" style="background: #f8f5ee;">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-12 col-md-6 col-lg-3" style="cursor: pointer;">
                            <a href="{{ url('/about') }}" class="text-decoration-none text-reset">
                                <div class="card h-100 shadow-sm border-0 p-4 text-center">
                                    <img src="{{ asset('assets/icons/about.svg') }}" alt="About" style="height:40px;"
                                        class="mb-3">
                                    <h5 class="fw-bold mb-2" style="color:#123c63;">About San Miguel</h5>
                                    <p class="mb-0 text-muted">Learn about the history and culture of San Miguel</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3" style="cursor: pointer;">
                            <a href="{{ url('/spots') }}" class="text-decoration-none text-reset">
                                <div class="card h-100 shadow-sm border-0 p-4 text-center">
                                    <img src="{{ asset('assets/icons/spots.svg') }}" alt="Spots" style="height:40px;"
                                        class="mb-3">
                                    <h5 class="fw-bold mb-2" style="color:#123c63;">Tourist Spots</h5>
                                    <p class="mb-0 text-muted">Discover the top attractions and landmarks</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3" style="cursor: pointer;">
                            <a href="{{ url('/maps') }}" class="text-decoration-none text-reset">
                                <div class="card h-100 shadow-sm border-0 p-4 text-center">
                                    <img src="{{ asset('assets/icons/map.svg') }}" alt="Map" style="height:40px;"
                                        class="mb-3">
                                    <h5 class="fw-bold mb-2" style="color:#123c63;">Interactive Map</h5>
                                    <p class="mb-0 text-muted">Find places of interest on the map</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3" style="cursor: pointer;">
                            <a href="{{ url('/events') }}" class="text-decoration-none text-reset">
                                <div class="card h-100 shadow-sm border-0 p-4 text-center">
                                    <img src="{{ asset('assets/icons/events.svg') }}" alt="Events" style="height:40px;"
                                        class="mb-3">
                                    <h5 class="fw-bold mb-2" style="color:#123c63;">Upcoming Events</h5>
                                    <p class="mb-0 text-muted">Check out the latest events and festivals</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>




            <div class="footer">
                <div class="container text-center py-4">
                    <p class="mb-0" style="color: #123c63;">&copy; 2025 ArcGuide. All rights reserved.</p>
                    <p class="mb-0" style="color: #123c63;">Made with ❤️ by EGDD</p>
                </div>
            </div>
        </div>



    </div>



<script src="{{ asset('assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>