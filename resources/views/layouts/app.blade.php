<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/formdesign.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3">
    <div class="container">
        <a class="navbar-brand fw-bold text-secondary">
            Authentication System
        </a>

        <div>
            @auth
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.create') }}">Create Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profiles.index') }}">All Profiles</a>
                </li>
            </ul>
            @endauth

            {{-- Right Menu --}}
            <ul class="navbar-nav ms-auto align-items-center">
                @auth
                    <li class="nav-item me-2">
                        <span class="nav-link fw-semibold">{{ auth()->user()->name }}</span>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link fw-semibold">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link fw-semibold" href="{{ route('register') }}">Sign up</a>
                    </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>
 @yield('content')

</body>
</html>
