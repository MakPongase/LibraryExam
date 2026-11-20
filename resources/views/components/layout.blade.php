<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        {{ isset($title) ? $title . ' - Library' : 'Library' }}
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <h1>
            <a href="/">Library Management System</a>
        </h1>

        <nav>
          @auth
                
            <span>Hello, {{ auth()->user()->name }}</span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </nav>

        <hr>
    </header>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <main>
        {{ $slot }}
    </main>
</body>
</html>