<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
	<meta name="description" content="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon.png">
    <link rel="mask-icon" href="/favicon/favicon.png" color="#ff2d20">
    <link rel="shortcut icon" href="favicon/favicon.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" />
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('head')
</head>
<body>
    <div id="app">
        <div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary ml-4 text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                    <a href="{{ url('/') }}" class="btn btn-primary ml-4 text-sm text-gray-700 underline">Home</a>
                </div>
            @endif            
        </div>
        @yield('header')


        <main class="py-4">
            @yield('content')
        </main>


        @yield('footer')
        <footer>
            <div>
                <ul>
                    <li>Livre d'Or</li>
                    <li>Contact</li>
                    <li>Plan du site</li>
                    <li>© 2021 - S.E.R.U</li>
                </ul>
            </div>
            <section>
                <div id="copyright" class="mb-6 has-text-centered text-light container">
                    <p>&copy; 2021. All rights reserved. | Photos by <a href="#">Novation-Web</a> | Design by <a href="https://www.novation-web.com/" target="_blank" rel="nofollow">Novation-Web</a>.</p>
                </div>
            </section>
        </footer> 
    </div>
</body>
</html>
