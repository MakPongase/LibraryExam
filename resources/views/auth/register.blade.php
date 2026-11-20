<x-layout>
    <x-slot:title>Register</x-slot:title>

    <div class="flex min-h-[70vh] items-center justify-center">
        <div class="w-full max-w-md rounded-xl bg-white p-8 shadow-md">
            <h1 class="mb-2 text-center text-2xl font-bold">
                Create an account
            </h1>

            <p class="mb-6 text-center text-sm text-gray-500">
                Register to manage the library's books.
            </p>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="name" class="mb-1 block text-sm font-medium">
                        Name
                    </label>

                    <input
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        autofocus
                        class="w-full rounded-md border border-gray-300 px-3 py-2"
                    >

                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="mb-1 block text-sm font-medium">
                        Email
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        class="w-full rounded-md border border-gray-300 px-3 py-2"
                    >

                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="mb-1 block text-sm font-medium">
                        Password
                    </label>

                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        class="w-full rounded-md border border-gray-300 px-3 py-2"
                    >

                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="mb-1 block text-sm font-medium">
                        Confirm Password
                    </label>

                    <input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        required
                        class="w-full rounded-md border border-gray-300 px-3 py-2"
                    >
                </div>

                <button
                    type="submit"
                    class="w-full rounded-md bg-indigo-600 px-4 py-2 font-medium text-white hover:bg-indigo-700"
                >
                    Register
                </button>
            </form>

            <p class="mt-6 text-center text-sm text-gray-600">
                Already have an account?

                <a href="/login" class="font-medium text-indigo-600 hover:underline">
                    Login
                </a>
            </p>
        </div>
    </div>
</x-layout>