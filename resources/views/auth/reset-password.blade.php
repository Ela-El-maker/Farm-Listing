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


@extends('frontend.layouts.master')
@section('contents')
    <!-- breedcrumb section start  -->
    <section class="breedcrumb" style="
        background: url('src/images/bg/bg-04.jpg') center center/cover no-repeat;
      ">
        <div class="container">
            <h2 class="breedcrumb__title text--heading-2">Reset Password</h2>
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
                    <a href="#" class="breedcrumb__page-link text--body-3">Reset Password</a>
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
                        Reset Password
                    </h2>



                    <div class="registration-form__wrapper">
                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">


                            <div class="input-field" style="margin-bottom: 15px;">
                                <label for="email" style="display: block; margin-bottom: 5px; font-size: 14px; color: #555;">Email
                                    Address</label>
                                <input type="email" id="email" name="email"  class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email',$request->email) }}" placeholder="Enter your email" required
                                    style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </div>

                            <!-- New Password -->
                            <div class="input-field" style="margin-bottom: 15px;">
                                <label for="password" style="display: block; margin-bottom: 5px; font-size: 14px; color: #555;">New
                                    Password</label>
                                <input type="password" id="password" name="password"  class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Enter new password" required
                                    style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                            </div>

                            <!-- Confirm Password -->
                            <div class="input-field" style="margin-bottom: 20px;">
                                <label for="confirm-password"
                                    style="display: block; margin-bottom: 5px; font-size: 14px; color: #555;">Confirm
                                    Password</label>
                                <input type="password" id="confirm-password"  class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" name="password_confirmation"
                                    placeholder="Confirm your password" required
                                    style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                            </div>

                            <button class="btn btn--lg w-100 registration-form__btns" type="submit"
                                style="padding: 10px 20px;  border: none; border-radius: 5px; color: white; cursor: pointer;">
                                Reset Password
                                <span class="icon--right">
                                    <!-- Right Arrow Icon -->
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.75 12H20.25" stroke="white" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="white" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- registration section end -->

@endsection
