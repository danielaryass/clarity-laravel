<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('includes.frontsite.meta')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/image/clogo.png') }}">
    <title>@yield('title') | CLARITY</title>

    @stack('before-style')
    @include('includes.frontsite.style')
    @stack('after-style')


    <!-- Modernizr JS -->
    <script src="{{ asset('assets/frontsite/js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->

    <script src="{{ asset('assets/frontsite/js/respond.min.js') }}"></script>


</head>

<body>


    @include('sweetalert::alert')
    <div id="page">
        @include('components.frontsite.navbar')
        @yield('content')


        @stack('before-script')
        @include('includes.frontsite.script')
        @stack('after-script')
        @include('components.frontsite.newsletter')
        @include('components.frontsite.footer')

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>
    </div>
</body>

</html>
