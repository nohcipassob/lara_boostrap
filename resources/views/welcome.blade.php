<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png" />
    <!-- <link rel="stylesheet" href="css/bootstrap.css" /> -->

    <title>Welcome to VERA</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js', 'resources/css/bootstrap.css'])

</head>

<body>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" width="100" />
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#solutions">Solutions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#details">Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#expertise">Expertise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                </ul>
                <span class="nav-item">
                    <span class="fa-stack">
                        <a href="https://facebook.com" target="_blank">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x text-white"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="https://twitter.com" target="_blank">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x text-white"></i>
                        </a>
                    </span>
                </span>
            </div>
        </div>
    </nav>


    <!-- Header -->
    <header class="header position-relative">
        <img
            src="{{ Vite::asset('resources/images/vertical-decoration-left.svg') }}"
            alt=""
            class="vertical-decoration position-absolute d-none d-md-block" />
        <div class="container">
            <div class="row">
                <div class="col-md-6 pt-5">
                    <h1 class="xl-text mt-5">
                        Software Solutions For
                        <span class="text-primary fw-bold replace-me">Small Business, Startups, Enterprise</span>
                    </h1>
                    <p class="lead">
                        Boost your business with cutting-edge software solutions tailored
                        to the needs of modern enterprises.
                    </p>
                    <a href="#" class="btn btn-primary text-white">Learn More</a>
                </div>
            </div>
        </div>
    </header>



    <!-- Partners -->
    <section class="partners py-4 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h6 class="text-center mb-4 text-uppercase">Our Partners</h6>
                    <div
                        class="d-flex justify-content-center align-items-center text-center">
                        <div>
                            <img src="{{ Vite::asset('resources/images/partner-logo-1.png') }}" alt="" class="mx-4" />
                        </div>
                        <div class="d-none d-sm-block">
                            <img src="images/partner-logo-2.png" alt="" class="mx-4" />
                        </div>
                        <div class="d-none d-md-block">
                            <img src="images/partner-logo-3.png" alt="" class="mx-4" />
                        </div>
                        <div class="d-none d-lg-block">
                            <img src="images/partner-logo-4.png" alt="" class="mx-4" />
                        </div>
                        <div class="d-none d-lg-block"></div>
                        <img src="images/partner-logo-5.png" alt="" class="mx-4" />
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


</body>


</html>