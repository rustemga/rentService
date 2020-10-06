<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/848ba07f3a.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="text-right p-8 bg-red-600 text-gray-100">
    <a href="/"><img class="w-1/12 rounded-lg shadow-xl" src="\img\logo.jpg" alt="logo"></a>
    @guest

        <a class="mr-6 href="{{ route('login') }}">{{ __('Login') }}</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
    @else

        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>


        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>


        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    @endguest
</div>

<main class="flex-center position-ref full-height">
    @yield('content')
</main>
</body>
</html>
