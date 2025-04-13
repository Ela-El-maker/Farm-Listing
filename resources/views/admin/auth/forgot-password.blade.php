{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
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

            <form method="POST" action="{{ route('admin.password.email') }}">
                @csrf

                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" id="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email" name="email" tabindex="1" required autofocus>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <button type="submit" class="btn btn-primary btn-flat m-b-15" tabindex="2">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
