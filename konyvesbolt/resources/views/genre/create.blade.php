<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre Form</title>
</head>
<body>
    <form action="{{ route('genre.store') }}" method="POST">
        @csrf
        <label for="mufaj">Genre:</label>
        <input type="text" id="mufaj" name="mufaj" required>
        <button type="submit">Save</button>
    </form>
</body>
</html>
