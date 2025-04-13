{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('admin.auth.layouts.auth-master')

@section('contents')
<div class="container">
    <div class="login-content">
        <div class="login-logo">
            <a href="index.html">
                <img class="align-content" src="images/logo.png" alt="">
            </a>
        </div>
        <div class="login-form">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('admin.login') }}">
                @csrf

                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" id="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email" name="email" tabindex="1" required autofocus>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" id="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" tabindex="2" required>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="checkbox">
                    <label>
                        <input name="remember" type="checkbox" tabindex="3" id="remember-me"> Remember Me
                    </label>
                    <label class="pull-right">
                        <a href="{{ route('admin.password.request') }}">Forgotten Password?</a>
                    </label>
                </div>
                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" tabindex="4">Sign in</button>
            </form>
        </div>
    </div>
</div>
@endsection
