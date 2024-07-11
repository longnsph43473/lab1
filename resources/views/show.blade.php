<!DOCTYPE html>
<html>
<head>
    <title>{{ $book->title }}</title>
</head>
<body>
    <h1>{{ $book->title }}</h1>
    <p><strong>Author:</strong> {{ $book->author }}</p>
    <p><strong>Publisher:</strong> {{ $book->publisher }}</p>
    <p><strong>Publication Date:</strong> {{ $book->publication }}</p>
    <p><strong>Price:</strong> {{ $book->price }}</p>
    <p><strong>Quantity:</strong> {{ $book->quantity }}</p>
    <p><strong>Category:</strong> {{ $book->category_id }}</p>
</body>
</html>
