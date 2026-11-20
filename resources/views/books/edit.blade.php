<x-layout>
    <x-slot:title>Edit Book</x-slot:title>

    <h2>Edit Book</h2>

    <form method="POST" action="{{ route('books.update', $book) }}">
        @csrf
        @method('PUT')

        <p>
            <label for="title">Title</label><br>

            <input
                id="title"
                type="text"
                name="title"
                value="{{ old('title', $book->title) }}"
                required
            >

            @error('title')
                <br><span>{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label for="author">Author</label><br>

            <input
                id="author"
                type="text"
                name="author"
                value="{{ old('author', $book->author) }}"
                required
            >

            @error('author')
                <br><span>{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label for="description">Description</label><br>

            <textarea
                id="description"
                name="description"
            >{{ old('description', $book->description) }}</textarea>

            @error('description')
                <br><span>{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label for="published_year">Published Year</label><br>

            <input
                id="published_year"
                type="number"
                name="published_year"
                value="{{ old('published_year', $book->published_year) }}"
                min="1000"
                max="{{ date('Y') }}"
                required
            >

            @error('published_year')
                <br><span>{{ $message }}</span>
            @enderror
        </p>

        <button type="submit">Update Book</button>
    </form>

    <p>
        <a href="{{ route('books.index') }}">Cancel</a>
    </p>
</x-layout>