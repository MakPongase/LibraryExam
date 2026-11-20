<x-layout>
    <x-slot:title>Register</x-slot:title>

    <h2>Register</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <p>
            <label for="name">Name</label><br>

            <input
                id="name"
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
            >

            @error('name')
                <br>
                <span>{{ $message }}</span>
            @enderror
        </p>

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
        <p>
            <label for="password_confirmation">Confirm Password</label><br>

            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
            >
        </p>

        <button type="submit">Register</button>
    </form>

    <p>
        Already registered?
        <a href="{{ route('login') }}">Login</a>
    </p>
</x-layout>