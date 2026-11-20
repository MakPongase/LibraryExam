<x-layout>
    <x-slot:title>Home</x-slot:title>

    <h2>Welcome to the Library</h2>

    <p>This application is used to manage library books.</p>

    @guest
        <p>
            <a href="{{ route('register') }}">Create an account</a>
            or
            <a href="{{ route('login') }}">log in</a>.
        </p>
    @else
        <p>You are logged in as {{ auth()->user()->name }}.</p>
    @endguest
</x-layout>