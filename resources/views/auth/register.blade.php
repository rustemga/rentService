@extends('layouts.app')

@section('content')

    <div class="p-8 text-center">
        <h1 class="text-4xl font-hairline text-red-600 mt-10"><i class="fas fa-door-open mr-6"></i>{{ __('Register') }}
        </h1>
    </div>

    <div class="p-8 text-center">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label
                    class="text-xl font-hairline text-gray-700 mb-2 block" for="name">{{ __('Name') }}</label>
                <input
                    class="shadow w-1/5 px-4 py-2 border-red-600 text-gray-700 text-xl bg-red-300 mb-6 mt-2 rounded-lg focus:outline-none"
                    type="text" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

            </div>

            <div>
                <label for="email" class="text-xl font-hairline text-gray-700 mb-2 block">{{ __('E-Mail Address') }}</label>
                <input type="email"
                       class="shadow w-1/5 px-4 py-2 border-red-600 text-gray-700 text-xl mb-6 mt-2 rounded-lg bg-red-300 focus:outline-none"
                       name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="password" class="text-xl font-hairline text-gray-700 mb-2 block">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input type="password" class="shadow w-1/5 px-4 py-2 border-red-600 text-gray-700 text-xl mb-6 mt-2 rounded-lg bg-red-300 focus:outline-none"
                           name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm"
                       class="text-xl font-hairline text-gray-700 mb-2 block">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input type="password"
                           class="shadow w-1/5 px-4 py-2 border-red-600 text-gray-700 text-xl mb-6 mt-2 rounded-lg bg-red-300 focus:outline-none"
                           required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit"
                            class="px-4 py-3 bg-red-600 rounded-lg text-gray-100 text-xl font-hairline text-uppercase hover:bg-red-400">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
