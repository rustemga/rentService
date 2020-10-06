@extends('layouts.app')

@section('content')
    <div class="p-8 text-center">
        <h1 class="text-4xl font-hairline text-red-600 mt-10"><i class="fas fa-door-open mr-6"></i>{{ __('Login') }}</h1>
    </div>

    <div class="p-8 text-center">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="">
                <label for="email"
                       class="text-xl font-hairline text-gray-700 mb-2 block">{{ __('E-Mail Address') }}</label>
                <input
                    class="shadow w-1/5 px-4 py-2 border-red-600 text-gray-700 text-xl mb-6 mt-2 rounded-lg focus:outline-none"
                    type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div>
                <label class="text-xl font-hairline text-gray-700 mb-2 hover:border-red-600 block"
                       for="password">{{ __('Password') }}</label>
                <input class="shadow w-1/5 px-4 py-2 border-red-600 text-gray-700 text-xl mb-6 mt-2 focus:outline-none"
                       id="password" type="password" name="password" required autocomplete="current-password">
                @error('password')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <div class="mb-6">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="text-xl font-hairline text-gray-700 mb-8 hover:border-red-600" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <button
                class="px-4 py-3 bg-red-600 rounded-lg text-gray-100 text-xl font-hairline text-uppercase mr-20 hover:bg-red-400"
                type="submit">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="text-sm font-hairline text-gray-700 hover:text-red-700"
                   href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </form>
    </div>
@endsection
