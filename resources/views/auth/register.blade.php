{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

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
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
@extends('frontend.layouts.master')
@section('contents')
    <!-- registration section start   -->
    <section class="section registration">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-0">
                    <div class="registration__features">
                        <div class="registration__features-item">
                            <span class="icon">
                                <img src="../src/images/icon/chart.png" alt="chart" />
                            </span>
                            <div class="registration__features-info">
                                <h2 class="text--body-2-600">Manage Your Documents</h2>
                                <p class="text--body-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Etiam commodo vel ligula.
                                </p>
                            </div>
                        </div>
                        <div class="registration__features-item">
                            <span class="icon">
                                <img src="../src/images/icon/chart-circle.png" alt="chart" />
                            </span>
                            <div class="registration__features-info">
                                <h2 class="text--body-2-600">Chat with Anyone, Anytime</h2>
                                <p class="text--body-3">
                                    Class aptent taciti sociosqu ad litora torquent per conubia
                                    nostra, per inceptos himenaeos.
                                </p>
                            </div>
                        </div>
                        <div class="registration__features-item">
                            <span class="icon">
                                <img src="../src/images/icon/chart.png" alt="chart" />
                            </span>
                            <div class="registration__features-info">
                                <h2 class="text--body-2-600">245,365 Verified User</h2>
                                <p class="text--body-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Etiam commodo vel ligula.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-0">
                    <div class="registration-form">
                        <h2 class="text-center text--heading-1 registration-form__title">
                            Sign Up
                        </h2>

                        <div class="registration-form__sign-btns">
                            <a href="#" class="btn-sign">
                                <span class="icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.43242 12.0865L3.73625 14.6854L1.19176 14.7393C0.431328 13.3288 0 11.7151 0 10.0003C0 8.34203 0.403281 6.77828 1.11812 5.40137H1.11867L3.38398 5.81668L4.37633 8.0684C4.16863 8.67391 4.05543 9.32391 4.05543 10.0003C4.05551 10.7343 4.18848 11.4377 4.43242 12.0865Z"
                                            fill="#FBBB00" />
                                        <path
                                            d="M19.8253 8.13184C19.9401 8.73676 20 9.36148 20 9.99996C20 10.7159 19.9247 11.4143 19.7813 12.0879C19.2945 14.3802 18.0225 16.3818 16.2605 17.7983L16.2599 17.7978L13.4066 17.6522L13.0028 15.1313C14.172 14.4456 15.0858 13.3725 15.5671 12.0879H10.2198V8.13184H15.6451H19.8253Z"
                                            fill="#518EF8" />
                                        <path
                                            d="M16.2599 17.7975L16.2604 17.798C14.5467 19.1755 12.3698 19.9997 10 19.9997C6.19177 19.9997 2.8808 17.8711 1.19177 14.7387L4.43244 12.0859C5.27693 14.3398 7.45111 15.9442 10 15.9442C11.0956 15.9442 12.122 15.648 13.0027 15.131L16.2599 17.7975Z"
                                            fill="#28B446" />
                                        <path
                                            d="M16.383 2.30219L13.1434 4.95437C12.2319 4.38461 11.1544 4.05547 10 4.05547C7.39344 4.05547 5.17859 5.73348 4.37641 8.06812L1.11871 5.40109H1.11816C2.78246 2.1923 6.13519 0 10 0C12.4264 0 14.6511 0.864297 16.383 2.30219Z"
                                            fill="#F14336" />
                                    </svg>
                                </span>
                                Sign in With Google
                            </a>
                            <a href="#" class="btn-sign">
                                <span class="icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.6666 20H7.70126V10.1414H5V6.9316H7.70116V4.64762C7.70116 1.9411 8.89588 0 12.8505 0C13.6869 0 15 0.168134 15 0.168134V3.14858H13.6208C12.2155 3.14858 11.6668 3.5749 11.6668 4.75352V6.9316H14.9474L14.6553 10.1414H11.6667L11.6666 20Z"
                                            fill="#1877F2" />
                                    </svg>
                                </span>
                                Sign in With Facebook
                            </a>
                        </div>

                        <h2 class="registration-form__alternative-title text--body-3">
                            or Sign Up With Email
                        </h2>

                        <div class="registration-form__wrapper">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="input-field__group">
                                    <div class="input-field">
                                        <input type="text" placeholder="Full Name" name="name"
                                            value="{{ old('name') }}"
                                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                             tabindex="1" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                    </div>

                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="Username or email address" name="email"
                                        value="{{ old('email') }}"
                                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                         tabindex="2" />
                                    <span class="icon icon--success">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="20" height="20" rx="10" fill="#27C200" />
                                            <path d="M14 7L8.5 12.5L6 10" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="icon icon--alart">
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
                                <div class="input-field">
                                    <input type="password" placeholder="Password" id="password" name="password"
                                        class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                        placeholder="************" tabindex="3" />
                                    <span class="icon icon--eye" onclick="showPassword('password',this)">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z"
                                                stroke="#191F33" stroke-width="1.3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                                stroke="#191F33" stroke-width="1.3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="icon icon--success">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="20" height="20" rx="10" fill="#27C200" />
                                            <path d="M14 7L8.5 12.5L6 10" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="icon icon--alart">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.29 3.86L1.82002 18C1.64539 18.3024 1.55299 18.6453 1.55201 18.9945C1.55103 19.3437 1.64151 19.6871 1.81445 19.9905C1.98738 20.2939 2.23675 20.5467 2.53773 20.7239C2.83871 20.901 3.18082 20.9962 3.53002 21H20.47C20.8192 20.9962 21.1613 20.901 21.4623 20.7239C21.7633 20.5467 22.0127 20.2939 22.1856 19.9905C22.3585 19.6871 22.449 19.3437 22.448 18.9945C22.4471 18.6453 22.3547 18.3024 22.18 18L13.71 3.86C13.5318 3.56611 13.2807 3.32312 12.9812 3.15448C12.6817 2.98585 12.3438 2.89725 12 2.89725C11.6563 2.89725 11.3184 2.98585 11.0188 3.15448C10.7193 3.32312 10.4683 3.56611 10.29 3.86Z"
                                                fill="#FF4F4F" />
                                            <path d="M12 9V13" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M12 17H12.01" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="input-field">
                                    <input type="password" placeholder="Confirm Password" id="cpassword"
                                        name="password_confirmation"
                                        class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                        placeholder="************" tabindex="4" />
                                    <span class="icon icon--eye" onclick="showPassword('cpassword',this)">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z"
                                                stroke="#191F33" stroke-width="1.3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                                stroke="#191F33" stroke-width="1.3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="icon icon--success">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="20" height="20" rx="10" fill="#27C200" />
                                            <path d="M14 7L8.5 12.5L6 10" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="icon icon--alart">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.29 3.86L1.82002 18C1.64539 18.3024 1.55299 18.6453 1.55201 18.9945C1.55103 19.3437 1.64151 19.6871 1.81445 19.9905C1.98738 20.2939 2.23675 20.5467 2.53773 20.7239C2.83871 20.901 3.18082 20.9962 3.53002 21H20.47C20.8192 20.9962 21.1613 20.901 21.4623 20.7239C21.7633 20.5467 22.0127 20.2939 22.1856 19.9905C22.3585 19.6871 22.449 19.3437 22.448 18.9945C22.4471 18.6453 22.3547 18.3024 22.18 18L13.71 3.86C13.5318 3.56611 13.2807 3.32312 12.9812 3.15448C12.6817 2.98585 12.3438 2.89725 12 2.89725C11.6563 2.89725 11.3184 2.98585 11.0188 3.15448C10.7193 3.32312 10.4683 3.56611 10.29 3.86Z"
                                                fill="#FF4F4F" />
                                            <path d="M12 9V13" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M12 17H12.01" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="input-field">
                                    <label
                                        style="display: block; margin-bottom: 15px; font-weight: 600; color: #333; font-size: 16px;">Select
                                        Account Type:</label>
                                    <div style="display: flex; gap: 15px;">
                                        <!-- Renter Option -->
                                        <div style="position: relative; display: inline-block;">
                                            <input type="radio" id="renter" name="account_type" value="renter"
                                                style="position: absolute; opacity: 0; width: 0; height: 0;"
                                                onclick="
                                                     document.getElementById('renter-label').style.backgroundColor = '#3498db';
                                                     document.getElementById('renter-label').style.color = 'white';
                                                     document.getElementById('renter-label').style.borderColor = '#2980b9';
                                                     document.getElementById('rentee-label').style.backgroundColor = '#f8f9fa';
                                                     document.getElementById('rentee-label').style.color = '#495057';
                                                     document.getElementById('rentee-label').style.borderColor = '#ddd';
                                                   ">
                                            <label id="renter-label" for="renter"
                                                style="display: inline-block; padding: 10px 20px; background-color: #f8f9fa;
                                                          border: 2px solid #ddd; border-radius: 6px; cursor: pointer;
                                                          font-weight: 500; min-width: 100px; text-align: center;
                                                          transition: all 0.2s ease; color: #495057; user-select: none;">
                                                Renter
                                            </label>
                                        </div>

                                        <!-- Rentee Option -->
                                        <div style="position: relative; display: inline-block;">
                                            <input type="radio" id="rentee" name="account_type" value="rentee"
                                                style="position: absolute; opacity: 0; width: 0; height: 0;"
                                                onclick="
                                                     document.getElementById('rentee-label').style.backgroundColor = '#3498db';
                                                     document.getElementById('rentee-label').style.color = 'white';
                                                     document.getElementById('rentee-label').style.borderColor = '#2980b9';
                                                     document.getElementById('renter-label').style.backgroundColor = '#f8f9fa';
                                                     document.getElementById('renter-label').style.color = '#495057';
                                                     document.getElementById('renter-label').style.borderColor = '#ddd';
                                                   ">
                                            <label id="rentee-label" for="rentee"
                                                style="display: inline-block; padding: 10px 20px; background-color: #f8f9fa;
                                                          border: 2px solid #ddd; border-radius: 6px; cursor: pointer;
                                                          font-weight: 500; min-width: 100px; text-align: center;
                                                          transition: all 0.2s ease; color: #495057; user-select: none;">
                                                Rentee
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->has('account_type'))
                                    <div class="invalid-feedback ">
                                        {{ $errors->first('account_type') }}
                                    </div>
                                @endif
                                <!-- Add a small script to set initial state if one is already selected -->

                                <button class="btn btn--lg w-100 registration-form__btns" type="submit">
                                    Sign Up
                                    <span class="icon--right">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 12H20.25" stroke="white" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="white" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </button>

                                <p class="text--body-3 registration-form__redirect">
                                    Already Have an Account ? <a href="{{ route('login') }}">Sign In</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- registration section  end    -->
@endsection
@push('scripts')
    <script>
        window.onload = function() {
            if (document.getElementById('renter').checked) {
                document.getElementById('renter-label').style.backgroundColor = '#3498db';
                document.getElementById('renter-label').style.color = 'white';
                document.getElementById('renter-label').style.borderColor = '#2980b9';
            }
            if (document.getElementById('rentee').checked) {
                document.getElementById('rentee-label').style.backgroundColor = '#3498db';
                document.getElementById('rentee-label').style.color = 'white';
                document.getElementById('rentee-label').style.borderColor = '#2980b9';
            }
        }
    </script>
@endpush
