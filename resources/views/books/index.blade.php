<x-layout>
    <x-slot:title>Books</x-slot:title>

    <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
        <h2 class="text-2xl font-bold">
            Books
        </h2>

        <a
            href="{{ route('books.create') }}"
            class="rounded bg-green-600 px-4 py-2 font-bold text-white hover:bg-green-700"
        >
            Add Book
        </a>
    </div>

    @if ($books->isEmpty())
        <div class="rounded border border-dashed border-gray-400 bg-white p-8 text-center">
            <p class="text-gray-600">
                No books have been added.
            </p>

            <a
                href="{{ route('books.create') }}"
                class="mt-4 inline-block font-bold text-blue-600 hover:underline"
            >
                Add your first book
            </a>
        </div>
    @else
        <div class="overflow-x-auto rounded border border-gray-300 bg-white">
            <table class="min-w-full text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-3">Title</th>
                        <th class="px-4 py-3">Author</th>
                        <th class="px-4 py-3">Description</th>
                        <th class="px-4 py-3">Published Year</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @foreach ($books as $book)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3 font-medium">
                                {{ $book->title }}
                            </td>

                            <td class="px-4 py-3">
                                {{ $book->author }}
                            </td>

                            <td class="max-w-sm px-4 py-3 text-gray-600">
                                {{ $book->description ?: 'No description' }}
                            </td>

                            <td class="px-4 py-3">
                                {{ $book->published_year }}
                            </td>

                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                    <a
                                        href="{{ route('books.edit', $book) }}"
                                        class="font-bold text-blue-600 hover:underline"
                                    >
                                        Edit
                                    </a>

                                    <form
                                        method="POST"
                                        action="{{ route('books.destroy', $book) }}"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="cursor-pointer font-bold text-red-600 hover:underline"
                                            onclick="return confirm('Are you sure you want to delete this book?')"
                                        >
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</x-layout>