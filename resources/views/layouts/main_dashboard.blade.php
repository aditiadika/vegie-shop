<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Connect - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://lib.arvancloud.com/ar/Dropify/0.2.2/css/dropify.css">
    <!-- Theme Styles -->
    <link href="{{ asset('assets/css/connect.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/admin2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dark_theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <livewire:styles>
    </head>
<body>
<div class='loader'>
    <div class='spinner-grow text-primary' role='status'>
        <span class='sr-only'>Loading...</span>
    </div>
</div>
<div class="connect-container align-content-stretch d-flex flex-wrap">
    <div class="page-container">
        @include('dashboard_partials.header')
        @include('dashboard_partials.horizontal_bar')
        <div class="page-content">
            @yield('content')
        </div>
        @include('dashboard_partials.footer')
    </div>
</div>

<!-- Javascripts -->
<script src="{{ asset('assets/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/df-number-format/2.1.6/jquery.number.min.js"></script>
<script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/select2.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/blockui/jquery.blockUI.js') }}"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.time.min.js') }}"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.symbol.min.js') }}"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('assets/js/connect.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
<livewire:scripts>
<script>
    $(document).ready(function() {
        $('.separator.currency').number(true, 2);
        $('.separator').not('.separator.currency').number(true, 0);
        $('.separator').keyup(function() {
            $(this).next('.separator-hidden').val($(this).val());
        });
    });
</script>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@yield('scripts')
</body>
</html>
