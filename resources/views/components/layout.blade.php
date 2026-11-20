<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        {{ isset($title) ? $title . ' - Library Management System' : 'Library Management System' }}
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-100 text-gray-900">
    <nav class="bg-white shadow-sm">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
            <a href="/" class="text-xl font-bold text-indigo-600">
                Library
            </a>

            <div class="flex items-center gap-4">
                @auth
                    <span class="text-sm">
                        Hello, {{ auth()->user()->name }}
                    </span>

                    <form method="POST" action="/logout">
                        @csrf

                        <button
                            type="submit"
                            class="rounded-md bg-red-600 px-4 py-2 text-sm text-white hover:bg-red-700"
                        >
                            Logout
                        </button>
                    </form>
                @else
                    <a href="/login" class="text-sm hover:text-indigo-600">
                        Login
                    </a>

                    <a
                        href="/register"
                        class="rounded-md bg-indigo-600 px-4 py-2 text-sm text-white hover:bg-indigo-700"
                    >
                        Register
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    @if (session('success'))
        <div class="mx-auto mt-6 max-w-6xl px-6">
            <div class="rounded-md bg-green-100 p-4 text-green-800">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <main class="mx-auto max-w-6xl px-6 py-10">
        {{ $slot }}
    </main>
</body>
</html>
