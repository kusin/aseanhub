<!DOCTYPE html>
<html lang="en">

<head>
    {{-- set metadata on this website --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASEAN Hub International Design Competition 2026</title>

    {{-- set icon --}}
    <link rel="icon" href="{{ asset('img/dki-jakarta.png') }}" type="image/png">

    {{-- plugin style - google pro font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    {{-- plugin style - fontawesome 6.7.2 --}}
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-6.7.2/css/all.min.css') }}">

    {{-- template style - adminlte 3.2.0 --}}
    <link rel="stylesheet" href="{{ asset('adminlte/adminlte-3.2.0/dist/css/adminlte.min.css') }}">

    {{-- template style - custom --}}
    <link rel="stylesheet" href="{{ asset('adminlte/adminlte-stylesheet/template.css') }}">

    @stack('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- 1. navbar --}}
        <nav class="main-header navbar navbar-expand navbar-light navbar-white">
            @include('layouts.partials_backend.navbar')
        </nav>

        {{-- 2. sidebar --}}
        <aside class="main-sidebar sidebar-dark-warning">
            <div class="sidebar">
                @include('layouts.partials_backend.sidebar')
            </div>
        </aside>

        {{-- 3. content --}}
        <div class="content-wrapper">
            <div class="content pt-3 pb-3">
                <div class="container-fluid">
                    @yield('content')
                </div>
                {{-- container-fluid --}}
            </div>
            {{-- content --}}
        </div>
        {{-- content-wrapper --}}

        {{-- 4. footer --}}
        @include('layouts.partials_backend.footer')

    </div>
    {{-- wrapper --}}

    {{-- scripts jquery --}}
    <script src="{{ asset('adminlte/adminlte-3.2.0/plugins/jquery/jquery.min.js') }}"></script>

    {{-- scripts bootstrap 4.6.x --}}
    <script src="{{ asset('adminlte/adminlte-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    {{-- scripts bs-custom-file-input --}}
    <script src="{{ asset('adminlte/adminlte-3.2.0/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>

    {{-- scripts adminlte 3.2.0 --}}
    <script src="{{ asset('adminlte/adminlte-3.2.0/dist/js/adminlte.min.js') }}"></script>

    {{-- scripts fontawesome 6.7.2 --}}
    <script src="{{ asset('plugins/fontawesome-6.7.2/js/all.min.js') }}"></script>

    @stack('scripts')
</body>

</html>
