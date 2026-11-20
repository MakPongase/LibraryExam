<x-layout>
    <x-slot:title>Books</x-slot:title>

    <h2>Books</h2>

    <p>
        <a href="{{ route('books.create') }}">Add Book</a>
    </p>

    @if ($books->isEmpty())
        <p>No books have been added.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Published Year</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->description ?? 'No description' }}</td>
                        <td>{{ $book->published_year }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</x-layout>