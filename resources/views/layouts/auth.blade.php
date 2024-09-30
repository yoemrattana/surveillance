<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>{{ $pageTitle }}</title>

        <link rel="icon" href="{{ asset('favicon/favicon.ico') }}" type="image/x-icon" />
        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/fonts/boxicons.css') }}">
        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}">
        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}">

        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/rtl/core.css') }}"  >
        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" >
        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/css/demo.css') }}">
        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}">
        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/libs/@form-validation/form-validation.css') }}">
        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}">
        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/css/demo.css') }}">

    </head>
    <body class="login-body-wrapper">
        <div class="login-page">
            <div class="login-box">
                <div class="logo-login text-center">
                    @yield('content')
                </div>
            </div>
        </div>

        <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
        {{-- <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script> --}}
        <script src="{{ asset('assets/js/config.js') }}"></script>

        <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
        {{-- <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script> --}}
        <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/@form-validation/popular.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/@form-validation/bootstrap5.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/@form-validation/auto-focus.js') }}"></script>
        <script src="{{ asset('assets/js/pages-auth.js') }}"></script>

    </body>
</html>
