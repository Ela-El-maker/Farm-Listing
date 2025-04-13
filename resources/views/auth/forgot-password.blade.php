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

@extends('frontend.layouts.master')
@section('contents')
    <!-- breedcrumb section start  -->
    <section class="breedcrumb" style="
background: url('src/images/bg/bg-04.jpg') center center/cover no-repeat;
">
        <div class="container">
            <h2 class="breedcrumb__title text--heading-2">Forgot Password</h2>
            <ul class="breedcrumb__page">
                <li class="breedcrumb__page-item">
                    <a href="{{ url('/') }}" class="breedcrumb__page-link text--body-3">Home</a>
                </li>
                <li class="breedcrumb__page-item">
                    <a href="#" class="breedcrumb__page-link text--body-3">/</a>
                </li>
                <li class="breedcrumb__page-item">
                    <a href="#" class="breedcrumb__page-link text--body-3">Account</a>
                </li>
                <li class="breedcrumb__page-item">
                    <a href="#" class="breedcrumb__page-link text--body-3">/</a>
                </li>
                <li class="breedcrumb__page-item">
                    <a href="{{ route('password.request') }}" class="breedcrumb__page-link text--body-3">Forgot Password</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- breedcrumb section end  -->

    <!-- registration section start -->
    <section class="section registration"
        style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">
        <div class="container">
            <div class="col-lg-6 order-1 order-lg-0" style="margin: auto;">
                <div class="registration-form" style="text-align: center;">
                    <h2 class="text-center text--heading-1 registration-form__title">
                        Forgot Password
                    </h2>

                    <h2 class="registration-form__alternative-title text--body-3">
                        Enter your Email address
                    </h2>

                    <div class="registration-form__wrapper">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="input-field">
                                <input type="text" placeholder="email address" name="email"
                                    value="{{ old('email') }}"
                                    class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" required autofocus
                                    tabindex="2" />
                                <span class="icon icon--success">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="20" height="20" rx="10" fill="#27C200" />
                                        <path d="M14 7L8.5 12.5L6 10" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span class="icon icon--alert"
                                    style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);">
                                    <!-- Alert Icon -->
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.29 3.86L1.82002 18C1.64539 18.3024 1.55299 18.6453 1.55201 18.9945C1.55103 19.3437 1.64151 19.6871 1.81445 19.9905C1.98738 20.2939 2.23675 20.5467 2.53773 20.7239C2.83871 20.901 3.18082 20.9962 3.53002 21H20.47C20.8192 20.9962 21.1613 20.901 21.4623 20.7239C21.7633 20.5467 22.0127 20.2939 22.1856 19.9905C22.3585 19.6871 22.449 19.3437 22.448 18.9945C22.4471 18.6453 22.3547 18.3024 22.18 18L13.71 3.86C13.5318 3.56611 13.2807 3.32312 12.9812 3.15448C12.6817 2.98585 12.3438 2.89725 12 2.89725C11.6563 2.89725 11.3184 2.98585 11.0188 3.15448C10.7193 3.32312 10.4683 3.56611 10.29 3.86Z"
                                            fill="#FF4F4F" />
                                        <path d="M12 9V13" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12 17H12.01" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </div>

                            <button class="btn btn--lg w-100 registration-form__btns" type="submit"
                                style="padding: 10px 20px;  border: none; border-radius: 5px; color: white; cursor: pointer;">
                                Send Reset Link
                                <span class="icon--right">
                                    <!-- Right Arrow Icon -->
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.75 12H20.25" stroke="white" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="white" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>

                            <p class="text--body-3 registration-form__redirect" style="margin-top: 20px;">
                                Go back to Sign In ? <a href="{{ route('login') }}"
                                    style="color: #007bff; text-decoration: none;">Sign In</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- registration section end -->
@endsection
