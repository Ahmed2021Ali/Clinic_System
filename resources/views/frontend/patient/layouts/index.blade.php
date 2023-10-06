<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js"
        integrity="sha512-4TcjHXQMLM7Y6eqfiasrsnRCc8D/unDeY1UGKGgfwyLUCTsHYMxF7/UHayjItKQKIoP6TTQ6AMamb9w2GMAvNg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/css/themes/splide-default.min.css"
        integrity="sha512-KhFXpe+VJEu5HYbJyKQs9VvwGB+jQepqb4ZnlhUF/jQGxYJcjdxOTf6cr445hOc791FFLs18DKVpfrQnONOB1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css"
        integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.rtl.min.css"
        integrity="sha512-wO8UDakauoJxzvyadv1Fm/9x/9nsaNyoTmtsv7vt3/xGsug25X7fCUWEyBh1kop5fLjlcrK3GMVg8V+unYmrVA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ url('assets/styles/pages/main.css') }}">

    @yield('cs')

    <title>@yield('title')</title>
</head>

<body>
    <div class="page-wrapper">

        {{--  navbar  --}}
        <nav class="navbar navbar-expand-lg navbar-expand-md bg-blue sticky-top">
            <div class="container">
                <div class="navbar-brand">
                    <a class="fw-bold text-white m-0 text-decoration-none h3" href="{{ route('HomePage') }}">VCare</a>
                </div>
                <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
                        <a type="button" class="btn btn-outline-light navigation--button"
                            href="{{ route('HomePage') }}">Home</a>
                        <a type="button" class="btn btn-outline-light navigation--button"
                            href="{{ route('MajorPage') }}">majors</a>
                        <a type="button" class="btn btn-outline-light navigation--button"
                            href="{{ route('DoctorPage') }}">Doctors</a>
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a type="button" class="btn btn-outline-light navigation--button"
                                        href="{{ route('LoginPage') }}">login</a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name ? Auth::user()->name : Auth::guard('doctor')->user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="col-12">
            @include('backend.layouts.layout.val')
        </div>
        @yield('content_page')

        <footer class="container-fluid bg-blue text-white py-5">
            <div class="row gap-2">

                <div class="col-sm order-sm-1">
                    <h1 class="h1">About Us</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus itaque,
                        laborum
                        saepe
                        enim maxime, delectus, dicta cumque error cupiditate nobis officia quam perferendis consequatur
                        cum
                        iure
                        quod facere.</p>
                </div>
                <div class="col-sm order-sm-2">
                    <h1 class="h1">Links</h1>
                    <div class="links d-flex gap-2 flex-wrap">
                        <a href="{{ route('HomePage') }}" class="link text-white">Home</a>
                        <a href="{{ route('MajorPage') }}" class="link text-white">Majors</a>
                        <a href="{{ route('DoctorPage') }}" class="link text-white">Doctors</a>
                        <a href="{{ route('LoginPage') }}" class="link text-white">Login</a>
                        <a href="{{ route('RegistrationPage') }}" class="link text-white">Register</a>
                        <a href=" {{ route('Contact_Us') }}  " class="link text-white">Contact Us</a>
                        <a href=" {{ route('dashbord') }}   " class="link text-white">Dashbiard Admin </a>
                    </div>


                </div>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
            integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ url('assets/scripts/home.js') }}"></script>
        @vite(['resources/js/app.js'])

        @yield('js')

</body>

</html>
