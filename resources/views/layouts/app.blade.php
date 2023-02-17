<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
    <link href="{{asset('css/about.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.0.5/swiper-bundle.css" integrity="sha512-CTWIgc35lLPcCl1OP7MNcrrES+jyBBvMEz8Cqx/v0hifPNjIpPsd/jUYTJ/41CYCrQdfuw7LopKaqqjXVLqejg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div style="background-color:transparent !important;position: absolute;width: 100%;">
            {{-- <div > --}}
                <!-- Left Side Of Navbar -->
                
            <div class="container">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto" style="height: 10px;flex-direction: row;justify-content: flex-end;">
                            <li class="contact-item">
                                <img src="assets/call.png" height="8px" alt="">
                                <p>  &nbsp;&nbsp;(+000) 123 456 78</p>
                            </li>
                            <li class="contact-item">
                                <img src="assets/mail.png" height="8px" alt="">
                                <p>  &nbsp;&nbsp;lorem@proassessors.com</p>
                            </li>
                            <li class="contact-item">
                                <img src="assets/coolicon.png" height="8px" alt="">
                                <p>  &nbsp;&nbsp;#123, address, street name.</p>
                            </li>
                </ul>
            </div>
            <nav style="" class="navbar navbar-expand-md">
                
                <div class="container" >
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="assets/logos.png"  />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a  class="nav-link" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/about')}}">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact us</a>
                                    </li>
                            <!-- Authentication Links -->

                            @guest
                                {{-- @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif --}}

                                @if (Route::has('register'))
                                    <li class="nav-item" style="height: 21px !important;background-color: white !important;border-radius: 50px">
                                        <a class="nav-link" style="color: #20215E !important;padding-top: 2px !important;font-size: .7rem !important" href="{{ route('register') }}">SIgnup | Login</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
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
            </nav>
        </div>
        <main class="py-4" style="padding-top: 0px !important;
            padding-bottom: 0px !important;">
            @yield('content')
        </main>
        <div class="footer_header">
            <div style="background-color: #20215E;flex: 1;display: flex;justify-content: center;align-items: center;flex-direction: column">
                <img src="assets/logos.png" width="35%" alt="">
                <p>Pro-assessors-web-based platform <br>for your med-legal process</p>
            </div>
            <div style="background-color: #20215E;flex: 1;display: flex;justify-content: center;padding-top: 80px; ">
                <ul class="header_items" style="list-style: none">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/about')}}">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>
                </ul>
            </div>
            <div style="background-color: #20215E;flex: 1;display: flex;flex-direction: column;align-items: center;padding-top: 80px;">
                <p style="color: white;padding: 0px;font-size: .9rem;margin:0px">Follow us</p>
                <div>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>© 2023 Pro-Assessors by Itek Global</p>
            <p>Privacy Policy    |    Terms & Conditions</p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.0.5/swiper-bundle.min.js" integrity="sha512-cEcJcdNCHLm3YSMAwsI/NeHFqfgNQvO0C27zkPuYZbYjhKlS9+kqO5hZ9YltQ4GaTDpePDQ2SrEk8gHUVaqxig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src='https://use.fontawesome.com/826a7e3dce.js'></script> --}}
    <script>
        $(document).ready(function()
{
    var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });
 

    });
    </script>
</body>
</html>
