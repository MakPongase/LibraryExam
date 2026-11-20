<x-layout>
    <x-slot:title>Login</x-slot:title>

    <h2>Login</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <p>
            <label for="email">Email</label><br>

            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
            >

            @error('email')
                <br>
                <span>{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label for="password">Password</label><br>

            <input
                id="password"
                type="password"
                name="password"
                required
            >
            @error('password')
                <br>
                <span>{{ $message }}</span>
            @enderror
        </p>
   

        <button type="submit">Login</button>
    </form>

    <p>
        No account?
        <a href="{{ route('register') }}">Register</a>
    </p>
</x-layout>