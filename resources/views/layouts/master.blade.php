<!DOCTYPE html>
<html lang="en" class="light-style layout-wide " dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Laravel Knockout</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Yoem Rattana" />
    <meta name="keywords" content="Yoem Rattana" />

    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/fonts/boxicons.css') }}">
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}">
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}">
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/rtl/core.css') }}">
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}">
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/css/demo.css') }}">
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}">
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/libs/toastr/toastr.css') }}">
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}">
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('assets/vendor/libs/select2/select2.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <style>
        .inline-spacing {display: flex}
        .input-error {
          border-color: tomato;
          color: tomato;
        }
        .message-error {
          color:tomato;
        }
        body {
          font-family: Arial, Hanuman !important;
        }
        button {width: max-content}
        .cellx {
          background-image: linear-gradient(to bottom right,  transparent calc(50% - 1px), rgb(150, 147, 147), transparent calc(50% + 1px)),
                            linear-gradient(to top right,  transparent calc(50% - 1px), rgb(150, 147, 147), transparent calc(50% + 1px));
            padding: 17px;
        }

        table.tbl-data tr:nth-child(n+2) td:nth-child(n+4)   {
          width: 150px !important;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .no-border {
            border: none;
        }

        .col-num {width: 20px}

        h5{font-family: 'khmer os muol light';}
        table {border: 1px !important;}
        thead {background: gainsboro}
    </style>

    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/JavaScript/moment.min.js') }}"></script>
    <script src="{{ asset('assets/JavaScript/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/JavaScript/FileSaver.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/JavaScript/pre-config.js') }}"></script>

    <!-- Knockout -->
    <script src="{{ asset('assets/JavaScript/knockout-3.4.0.js') }}"></script>
    <script src="{{ asset('assets/JavaScript/knockout.mapping.js') }}"></script>
    <script src="{{ asset('assets/JavaScript/knockout.extension.js') }}"></script>
    <script src="{{ asset('/assets/ViewModel/app.js') }}"></script>
    <script src="{{ asset('assets/JavaScript/knockout.validation.js') }}"></script>
    <script src="{{ asset('assets/JavaScript/axios.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/js/forms-selects.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>

    <script>
        var local = '<?php echo session()->get('locale') ?>';
    </script>
</head>

<body>

      <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
    <!-- Layout container -->
    <div class="layout-container">
      @include('layouts.sidebar')

      <!-- Layout page -->
      <div class="layout-page">

        @include('layouts.nav')

        <div class="content-wrapper">
            <div class="container-fluid flex-grow-1 container-p-y">

               @yield('content')

            </div>

            @include('layouts.footer')

            <div class="content-backdrop fade"></div>
         </div>
      </div>
      <!--/ Layout page -->
    </div>
    <!--/ Layout container -->

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  @include('layouts.modal')
</body>

<script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
<script src="{{ asset('assets/js/config.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
<script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/JavaScript/post-config.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/toastr/toastr.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>

</html>
