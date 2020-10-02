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
                        <a  href="{{ url('/home') }}">Личный Кабинет</a>
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
                <h1 class="text-4xl font-hairline text-red-600 mt-10"><i class="fas fa-stream mr-6"></i>В прокате</h1>
            </div>
            <div class="flex flex-wrap mx-auto bg-red-600 px-20 py-10">
                <div class="bg-gray-100 px-4 py-6 mx-6 mb-6 flex-initial text-center w-1/6 hover:bg-gray-300">
                    <div class="text-center"><i class="fas fa-bicycle"></i></div>
                    <h1 class="text-xl font-bold text-gray-700">Название Проката</h1>
                    <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="flex">
                        <div class="flex-initial w-1/2 text-left font-bold text-green-500">Открыто</div>
                        <div class="flex-initial w-1/2 text-right"><i class="fas fa-star text-yellow-600"></i><span>5</span></div>
                    </div>
                </div>
                <div class="bg-gray-100 px-2 py-6 mx-6 mb-6 flex-initial text-center w-1/6 hover:bg-gray-300">
                    <h1>Название категории</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="bg-gray-100 px-2 py-6 mx-6 mb-6 flex-initial text-center w-1/6"><h1>Название категории</h1> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
                <div class="bg-gray-100 px-2 py-6 mx-6 mb-6 flex-initial text-center w-1/6"><h1>Название категории</h1> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
                <div class="bg-gray-100 px-2 py-6 mx-6 mb-6 flex-initial text-center w-1/6"><h1>Название категории</h1> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
                <div class="bg-gray-100 px-2 py-6 mx-6 mb-6 flex-initial text-center w-1/6"><h1>Название категории</h1> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>

            </div>

        </div>
    </body>
</html>
