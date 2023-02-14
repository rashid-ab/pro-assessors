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
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{asset('css/home.css')}}" rel="stylesheet">

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
                                        <a class="nav-link" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About us</a>
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
    </div>
</body>
</html>
