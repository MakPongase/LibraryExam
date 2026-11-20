<x-layout>
    <x-slot:title>Home</x-slot:title>

    <section class="py-20 text-center">
        <h1 class="text-4xl font-bold text-gray-900">
            Library Management System
        </h1>

        <p class="mx-auto mt-4 max-w-2xl text-gray-600">
            A simple Laravel application for managing library books.
        </p>

        @guest
            <div class="mt-8 flex justify-center gap-4">
                <a
                    href="/register"
                    class="rounded-md bg-indigo-600 px-5 py-3 text-white hover:bg-indigo-700"
                >
                    Create Account
                </a>

                <a
                    href="/login"
                    class="rounded-md border border-gray-300 bg-white px-5 py-3 hover:bg-gray-50"
                >
                    Login
                </a>
            </div>
        @else
            <p class="mt-8 font-medium text-green-700">
                You are signed in as {{ auth()->user()->name }}.
            </p>
        @endguest
    </section>
</x-layout>