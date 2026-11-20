<x-layout>
    <x-slot:title>Home</x-slot:title>

    <section class="py-16 text-center">
        <h2 class="text-3xl font-bold">
            Welcome to the Library
        </h2>

        <p class="mt-4 text-gray-600">
            This application is used to manage library books.
        </p>

        @guest
            <p class="mt-6">
                <a
                    href="{{ route('register') }}"
                    class="font-bold text-blue-600 hover:underline"
                >
                    Create an account
                </a>

                <span class="mx-1 text-gray-600">or</span>

                <a
                    href="{{ route('login') }}"
                    class="font-bold text-green-600 hover:underline"
                >
                    log in
                </a>.
            </p>
        @else
            <p class="mt-6">
                You are logged in as
                <strong>{{ auth()->user()->name }}</strong>.
            </p>
        @endguest
    </section>
</x-layout>