<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title', 'Online Banking')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-color: #0056b3;
            --secondary-color: #6c757d;
            --accent-color: #ffc107;
            --success-color: #28a745;
            --danger-color: #dc3545;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f8fa;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .auth-wrapper {
            display: flex;
            min-height: calc(100vh - 120px);
            align-items: center;
            padding: 2rem 0;
        }

        .auth-card {
            border-radius: 0.5rem;
            box-shadow: 0 10px 30px rgba(0,0,0,.1);
            overflow: hidden;
            border: none;
        }

        .auth-card .card-header {
            background-color: white;
            border-bottom: 1px solid rgba(0,0,0,.1);
            font-weight: 500;
            text-align: center;
            padding: 1.5rem;
        }

        .auth-card .card-body {
            padding: 2rem;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 0.6rem 1.5rem;
            font-weight: 500;
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #004494;
            border-color: #004494;
        }

        .btn-link {
            color: var(--primary-color);
            font-weight: 500;
        }

        .form-control {
            padding: 0.6rem 1rem;
            border-radius: 0.25rem;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(0, 86, 179, 0.25);
        }

        .invalid-feedback {
            font-size: 0.85rem;
            font-weight: 500;
        }

        .auth-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .auth-header h1 {
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .auth-header p {
            color: var(--secondary-color);
            max-width: 500px;
            margin: 0 auto;
        }

        .footer {
            background-color: white;
            box-shadow: 0 -2px 4px rgba(0,0,0,.05);
            padding: 1.5rem 0;
            margin-top: auto;
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color);
        }

        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
            background-color: white;
        }
    </style>

    @stack('styles')
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="auth-wrapper">
    <div class="container">
        @yield('content')
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="#" class="text-decoration-none text-muted me-3">Privacy Policy</a>
                <a href="#" class="text-decoration-none text-muted me-3">Terms of Service</a>
                <a href="#" class="text-decoration-none text-muted">Contact Us</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Alpine.js -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js"></script>

@stack('scripts')
</body>
</html>
