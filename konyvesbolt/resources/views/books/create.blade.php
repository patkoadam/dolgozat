<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
</head>
<body>
    <h1>Add New Book</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="cime">Book Title:</label>
        <input type="text" id="cime" name="cime" required>

        <label for="szerzoje">Author:</label>
        <input type="text" id="szerzoje" name="szerzoje" required>

        <label for="kiadas">Publication Year:</label>
        <input type="number" id="kiadas" name="kiadas" required>

        <label for="genre_id">Genre:</label>
        <select id="genre_id" name="genre_id" required>
            <option value="">Select a Genre</option>
            @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->mufaj }}</option>
            @endforeach
        </select>

        <button type="submit">Save</button>
    </form>
</body>
</html>
