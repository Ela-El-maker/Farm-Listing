{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
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

            <form method="POST" action="{{ route('admin.password.store') }}">
                @csrf
                                    <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">


                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" id="email" value="{{ old('email',$request->email) }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email" name="email" tabindex="1" required autofocus>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" id="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" tabindex="2" required>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" id="password-confirm"  name="password_confirmation" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Confirm Password" tabindex="3" required>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <button type="submit" class="btn btn-primary btn-flat m-b-15" tabindex="3">Reset Password</button>
            </form>
        </div>
    </div>
</div>
@endsection
