<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Logis - Your Partner in Delivery')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Helper Function -->
    @php
        $assetFunction = app()->environment('local') ? 'asset' : 'secure_asset';
    @endphp

    <!-- Favicons -->
    <link href="{{ $assetFunction('landing/img/logo_workshop.png') }}" rel="icon">
    <link href="{{ $assetFunction('landing/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ $assetFunction('landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ $assetFunction('landing/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ $assetFunction('landing/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ $assetFunction('landing/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ $assetFunction('landing/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ $assetFunction('landing/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ $assetFunction('landing/css/main.css') }}" rel="stylesheet">
</head>

<body class="@yield('body-class', 'index-page')">

    @include('includes.preloader')
    @include('includes.header')

    <main class="main">
        @yield('content')
    </main>

    @include('includes.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ $assetFunction('landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ $assetFunction('landing/vendor/php-email-form/validate.js') }}"></script> --}}
    <script src="{{ $assetFunction('landing/vendor/aos/aos.js') }}"></script>
    <script src="{{ $assetFunction('landing/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ $assetFunction('landing/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ $assetFunction('landing/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ $assetFunction('landing/js/main.js') }}"></script>
</body>

</html>
