<x-layout>
    <x-slot:title>Add Book</x-slot:title>

    <section>
        <div class="rounded border border-gray-300 bg-white p-6">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-green-600">
                    Add Book
                </h2>

                <p class="mt-1 text-gray-600">
                    Enter the information for the new book.
                </p>
            </div>

            <form method="POST" action="{{ route('books.store') }}">
                @csrf

                <div class="mb-4">
                    <label for="title" class="mb-1 block font-bold">
                        Title
                    </label>

                    <input
                        id="title"
                        type="text"
                        name="title"
                        value="{{ old('title') }}"
                        class="w-full rounded border border-gray-400 px-3 py-2 focus:border-green-500 focus:outline-none"
                        required
                    >

                    @error('title')
                        <p class="mt-1 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="author" class="mb-1 block font-bold">
                        Author
                    </label>

                    <input
                        id="author"
                        type="text"
                        name="author"
                        value="{{ old('author') }}"
                        class="w-full rounded border border-gray-400 px-3 py-2 focus:border-green-500 focus:outline-none"
                        required
                    >

                    @error('author')
                        <p class="mt-1 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="description" class="mb-1 block font-bold">
                        Description
                        <span class="text-sm font-normal text-gray-500">
                            (Optional)
                        </span>
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="4"
                        class="w-full rounded border border-gray-400 px-3 py-2 focus:border-green-500 focus:outline-none"
                    >{{ old('description') }}</textarea>

                    @error('description')
                        <p class="mt-1 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="published_year" class="mb-1 block font-bold">
                        Published Year
                    </label>

                    <input
                        id="published_year"
                        type="number"
                        name="published_year"
                        value="{{ old('published_year') }}"
                        min="1000"
                        max="{{ date('Y') }}"
                        class="w-full rounded border border-gray-400 px-3 py-2 focus:border-green-500 focus:outline-none"
                        required
                    >

                    @error('published_year')
                        <p class="mt-1 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-wrap items-center gap-3">
                    <button
                        type="submit"
                        class="cursor-pointer rounded bg-green-600 px-4 py-2 font-bold text-white hover:bg-green-700"
                    >
                        Add Book
                    </button>

                    <a
                        href="{{ route('books.index') }}"
                        class="rounded border border-gray-400 px-4 py-2 hover:bg-gray-100"
                    >
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </section>
</x-layout>