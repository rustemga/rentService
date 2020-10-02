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
                <div class="text-right p-8 bg-red-600 text-gray-100">
                    @auth
                        <a  href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="mr-6" href="{{ route('login') }}">Войти</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Зарегистрироваться</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="p-8 text-center">
                <img class="w-1/6 rounded-lg shadow-xl mx-auto" src="\img\logo.jpg" alt="logo">
                <h1 class="text-4xl font-hairline text-red-600 mt-10"><i class="fas fa-stream mr-6"></i>Категории</h1>
            </div>
            <div class="flex mx-auto bg-red-600 px-20 py-10">
                <div class="h-20 bg-gray-100 px-10 py-6 mx-6 flex-auto text-center">Название категории</div>
                <div class="h-20 bg-gray-100 px-10 py-6 mx-6 flex-auto text-center">Название категории</div>
                <div class="h-20 bg-gray-100 px-10 py-6 mx-6 flex-auto text-center">Название категории</div>
                <div class="h-20 bg-gray-100 px-10 py-6 mx-6 flex-auto text-center">Название категории</div>
                <div class="h-20 bg-gray-100 px-10 py-6 mx-6 flex-auto text-center">Название категории</div>
            </div>

        </div>
    </body>
</html>
