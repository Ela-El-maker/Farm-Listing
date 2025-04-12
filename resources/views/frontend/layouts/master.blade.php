<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Onest || Homepage 03</title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="512x512"
        href="{{ asset('frontend/assets/src/images/favicon_io/android-chrome-512x512.png') }}" />
    <link rel="apple-touch-icon" sizes="192x192"
        href="{{ asset('frontend/assets/src/images/favicon_io/android-chrome-192x192.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('frontend/assets/src/images/favicon_io/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('frontend/assets/src/images/favicon_io/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('frontend/assets/src/images/favicon_io/site.webmanifest') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/src/plugins/select2/css/select2.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('frontend/assets/src/plugins/select2/css/select2-bootstrap-5-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/src/plugins/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/src/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/src/css/extra.css') }}">
</head>

<body>
    <div class="loader">
        <div class="loader-icon">
            <img src="./src/images/loader.gif" alt="loader" />
        </div>
    </div>

    <!-- header section start  -->
    @include('frontend.layouts.header')
    <!-- header section end   -->

    @yield('contents')

    <!-- footer section start  -->
    @include('frontend.layouts.footer')
    <!-- footer section end -->

    <!-- Back To Top Btn -->
    <button class="scrollTop">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 20.25V3.75" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M5.25 10.5L12 3.75L18.75 10.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </button>

    <!-- Script Goes here  -->
    <script src="{{ asset('frontend/assets/src/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/src/plugins/lan.js') }}"></script>
    <script src="{{ asset('frontend/assets/src/plugins/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/src/plugins/select2/js/select2.min.js') }}" defer></script>
    <script src="{{ asset('frontend/assets/src/plugins/bvselect.js') }}"></script>
    <script src="{{ asset('frontend/assets/src/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/src/js/app.js') }}"></script>

    @stack('scripts')
    @include('frontend.layouts.scripts')
</body>

</html>
