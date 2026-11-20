<x-layout>
    <x-slot:title>Login</x-slot:title>

    <section class="mx-auto max-w-md">
        <div class="rounded border border-gray-300 bg-white p-6">
            <h2 class="mb-6 text-center text-2xl font-bold text-600">
                Login
            </h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="mb-1 block font-bold">
                        Email
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="w-full rounded border border-gray-400 px-3 py-2"
                        required
                    >

                    @error('email')
                        <p class="mt-1 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="mb-1 block font-bold">
                        Password
                    </label>

                    <input
                        id="password"
                        type="password"
                        name="password"
                        class="w-full rounded border border-gray-400 px-3 py-2"
                        required
                    >

                    @error('password')
                        <p class="mt-1 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="w-full cursor-pointer rounded bg-green-600 px-4 py-2 font-bold text-white hover:bg-green-700"
                >
                    Login
                </button>
            </form>

            <p class="mt-4 text-center">
                No account?

                <a
                    href="{{ route('register') }}"
                    class="font-bold text-green-600 hover:underline"
                >
                    Register
                </a>
            </p>
        </div>
    </section>
</x-layout>