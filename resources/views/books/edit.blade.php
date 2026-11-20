<x-layout>
    <x-slot:title>Edit Book</x-slot:title>

    <section>
        <div class="rounded border border-gray-300 bg-white p-6">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-blue-600">
                    Edit Book
                </h2>

                <p class="mt-1 text-gray-600">
                    Update the information for {{ $book->title }}.
                </p>
            </div>

            <form method="POST" action="{{ route('books.update', $book) }}">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="title" class="mb-1 block font-bold">
                        Title
                    </label>

                    <input
                        id="title"
                        type="text"
                        name="title"
                        value="{{ old('title', $book->title) }}"
                        class="w-full rounded border border-gray-400 px-3 py-2 focus:border-blue-500 focus:outline-none"
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
                        value="{{ old('author', $book->author) }}"
                        class="w-full rounded border border-gray-400 px-3 py-2 focus:border-blue-500 focus:outline-none"
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
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="4"
                        class="w-full rounded border border-gray-400 px-3 py-2 focus:border-blue-500 focus:outline-none"
                    >{{ old('description', $book->description) }}</textarea>

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
                        value="{{ old('published_year', $book->published_year) }}"
                        min="1000"
                        max="{{ date('Y') }}"
                        class="w-full rounded border border-gray-400 px-3 py-2 focus:border-blue-500 focus:outline-none"
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
                        class="cursor-pointer rounded bg-blue-600 px-4 py-2 font-bold text-white hover:bg-blue-700"
                    >
                        Update Book
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