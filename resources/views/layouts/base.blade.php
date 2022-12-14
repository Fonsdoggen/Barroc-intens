<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Barroc-intens</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    @include('cookie-consent::index')
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FDD716">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{asset('/')}}"><img src="{{asset('img/Logo6_klein.png')}}" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">

                    </li>
                    @auth
                        @if (Auth::user()->role_id !== 5)
                            <li class="nav-item">
                                <a href="{{route('dashboard')}}" class="nav-link">Dashboard</a>
                            </li>
                        @endif
                    @endauth

                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        @else
                            <li class="nav-item">
                                <a id="navbarDropdown" href="{{route('accounts.index')}}" class="nav-link" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a>


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>


                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <div class="container">
        @yield('content')
    </div>
</main>
</body>
<!-- Footer -->
<hr/>
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <img src="{{asset('img/Logo4_klein.png')}}" alt="Logo" style="width: auto; height: 50px">
                    </h6>
                    <img src="{{asset('img/Logo3_klein.png')}}" alt="Logo" style="width: auto; height: 60px">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Products
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Repairs</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Machines</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Contracts</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Beans</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                        <a href="{{route('accounts.index')}}" class="text-reset">Account settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p class="fas fa-home me-3">4826 AA Breda</p>
                    <p class="fas fa-envelope me-3">info@barrocintens.nl</p>
                    <p class="fas fa-phone me-3">+31(0)76 - 5733444</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        ?? 2022 Copyright:
        <a class="text-reset fw-bold" href="">Barroc-intens</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
</html>
