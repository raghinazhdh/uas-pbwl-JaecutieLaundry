<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jaecutie Laundry</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon"/>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
            min-height: 100vh;
            display: flex;
            background-color: #ffdbdb;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .container {
            max-width: 400px;
            width: 100%;
            padding: 2rem;
            background-color: #ff9797;
            border-radius: 0.5rem;
            box-shadow: 0 25px 50px 12px #FF1C61;
        }

        .center {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .logo-container {
            position: relative;
        }

        .logo {
            max-width: 150px; /* Atur sesuai kebutuhan */
            margin-bottom: 3rem;
        }

        .JL-text {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.8em;
            font-weight: bold;
            color: #9E4244;
            white-space: nowrap;
            text-shadow: 2px 2px 4px #F04A5E;
        }

        .center a {
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin: 0.5rem;
            font-size: 1.2em;
            display: inline-block; 
            background-color: #AD6966; 
            color: #fff; 
            border: none; 
            cursor: pointer; 
        }

        .center a:hover {
            background-color: #8d524e;
        }

        .or {
            margin: 0rem 0;
            color: #FFF;
            font-weight: bold;
        }
    </style>
</head>
<body class="antialiased">
    <div class="container">
        <div class="center">
            <div class="logo-container">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo">
                <div class="JL-text">Jaecutie Laundry</div>
            </div>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    <div class="or">OR</div>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</body>
</html>
