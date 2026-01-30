<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Meta --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'ASEAN Hub')</title>

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('img/dki-jakarta.png') }}" type="image/png">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Icons (optional) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Auth Styles --}}
    <style>
        body {
            background-color: #f5f6fa;
        }

        .auth-wrapper {
            min-height: 100vh;
        }

        /* LEFT SIDE IMAGE */
        .auth-illustration {
            background-image: url('{{ asset('img/img-login.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            position: relative;
        }

        /* optional overlay */
        .auth-illustration::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.25);
        }

        /* RIGHT SIDE */
        .auth-content {
            max-width: 420px;
            width: 100%;
        }

        .auth-card {
            padding: 0.5rem;
        }

        .form-control {
            padding: .6rem .75rem;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #696cff;
        }

        .btn-primary {
            background-color: #696cff;
            border-color: #696cff;
            padding: .6rem;
        }

        .btn-primary:hover {
            background-color: #5f63e6;
            border-color: #5f63e6;
        }
    </style>

    @stack('styles')
</head>

<body>

    <div class="container-fluid">
        <div class="row auth-wrapper">

            {{-- LEFT --}}
            <div class="col-lg-8 d-none d-lg-block auth-illustration"></div>

            {{-- RIGHT --}}
            <div class="col-lg-4 d-flex align-items-center bg-white">
                <div class="auth-content mx-auto">
                    <div class="auth-card">

                        @yield('content')

                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

</body>

</html>
