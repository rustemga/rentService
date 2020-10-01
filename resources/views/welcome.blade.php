<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/848ba07f3a.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <link href="{{asset('css/main.css')}}" rel="stylesheet">
    </head>
    <body class="bg-gray-100">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="text-right p-8">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="p-8 text-center">
                <img class="w-1/6 rounded-lg shadow-xl mx-auto" src="\img\logo.jpg" alt="logo">
                <h1 class="text-4xl font-hairline text-blue-600 mt-10"><i class="fas fa-stream mr-6"></i>Категории</h1>
            </div>
                <i class="fas fa-camera"></i>
{{--            <div class="content">--}}
{{--                <div class="title m-b-md">--}}
{{--                    Laravel--}}
{{--                </div>--}}

{{--                <div class="links">--}}
{{--                    <a href="https://laravel.com/docs">Docs</a>--}}
{{--                    <a href="https://laracasts.com">Laracasts</a>--}}
{{--                    <a href="https://laravel-news.com">News</a>--}}
{{--                    <a href="https://blog.laravel.com">Blog</a>--}}
{{--                    <a href="https://nova.laravel.com">Nova</a>--}}
{{--                    <a href="https://forge.laravel.com">Forge</a>--}}
{{--                    <a href="https://github.com/laravel/laravel">GitHub</a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </body>
</html>
