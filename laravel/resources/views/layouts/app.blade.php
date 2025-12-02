<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Konferencijų sistema') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .custom-notification {
            border-left: 5px solid;
            padding: 15px 20px;
            margin-bottom: 20px;
            background: #f8f9fa;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            position: relative;
        }
        .custom-notification.success {
            border-left-color: #28a745;
            background: #d4edda;
        }
        .custom-notification.error {
            border-left-color: #dc3545;
            background: #f8d7da;
        }
        .custom-notification .close-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            opacity: 0.5;
        }
        .custom-notification .close-btn:hover {
            opacity: 1;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ __('conferences.title') }}
            </a>
            <div>
                @guest
                    <a href="{{ route('login') }}" class="btn btn-light btn-sm">{{ __('auth.login') }}</a>
                @endguest
                @auth
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">{{ __('auth.logout') }}</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>

    <main class="py-4">
        @if(session('success'))
            <div class="container">
                <div class="custom-notification success">
                    <strong>✓</strong> {{ session('success') }}
                    <button class="close-btn" onclick="this.parentElement.remove()">×</button>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="container">
                <div class="custom-notification error">
                    <strong>✗</strong> {{ session('error') }}
                    <button class="close-btn" onclick="this.parentElement.remove()">×</button>
                </div>
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
