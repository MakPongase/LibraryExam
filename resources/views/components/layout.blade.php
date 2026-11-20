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

<body class="min-h-screen bg-gray-50 text-gray-900">
    <header class="border-b border-gray-300 bg-white">
        <div class="mx-auto flex max-w-5xl flex-wrap items-center justify-between gap-3 px-4 py-4">
            <h1 class="text-xl font-bold">
                <a
                    href="{{ auth()->check() ? route('books.index') : route('home') }}"
                    class="hover:underline"
                >
                    Library Management System
                </a>
            </h1>

            <nav class="flex flex-wrap items-center gap-4 text-sm">
                @auth
                    <a
                        href="{{ route('books.index') }}"
                        class="hover:underline"
                    >
                        Books
                    </a>

                    <span>
                        Hello, {{ auth()->user()->name }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button
                            type="submit"
                            class="cursor-pointer rounded border border-gray-400 px-3 py-1 hover:bg-gray-100"
                        >
                            Logout
                        </button>
                    </form>
             
                @endauth
            </nav>
        </div>
    </header>

    @if (session('success'))
        <div class="mx-auto max-w-5xl px-4 pt-4">
            <p class="border border-green-300 bg-green-50 p-3 text-green-800">
                {{ session('success') }}
            </p>
        </div>
    @endif

    <main class="mx-auto max-w-5xl px-4 py-6">
        {{ $slot }}
    </main>
</body>
</html>