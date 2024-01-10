<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jaecutie Laundry') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-... (integrity)" crossorigin="anonymous" />


    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <style>
        html {
            position: relative;
            min-height: 100%;
        }

        body {
            margin-bottom: 70px;
            background-color: #ffdbdb;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #D3D3D3;
            color: black;
        }

        .navbar-brand {
            color: #9E4244;
            text-shadow: 2px 2px 4px #F04A5E;
            font-weight: bold;
        }

        .navbar-nav li.nav-item a.nav-link {
            transition: color 0.3s;
        }

        .navbar-nav li.nav-item a.nav-link:hover {
            color: pink;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light" style="background-color: #ff9797; shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" width="30" height="30"
                        class="d-inline-block align-text-top">
                    Jaecutie Laundry
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <strong>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/layanan') }}">Layanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/pelanggan') }}">Pelanggan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/transaksi') }}">Transaksi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/user') }}">User</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </strong>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>

        <footer class="footer absolute-bottom py-1" style="background-color: #D3D3D3; color: black;">
            <div class="container d-flex justify-content-between align-items-center font-weight-bold">
                <span class="text-muted">Copyright © JLaundry 2024. All Rights Reserved.</span>
                <span class="text-muted">Designed By RA. Ghina Zahidah</span>
            </div>
        </footer>
    </div>
</body>

</html>
