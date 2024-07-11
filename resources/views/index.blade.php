<!DOCTYPE html>
<html>
<head>
    <title>Book Store</title>
</head>
<body>
    <h1>Book Store</h1>

    <h2>Những sách có giá cao nhất</h2>
    <ul>
        @foreach($highestPricedBooks as $book)
            <li>
                <a href="/book/{{ $book->id }}">{{ $book->title }}</a> - {{ $book->price }}
            </li>
        @endforeach
    </ul>

    <h2>Những sách có giá thấp nhất</h2>
    <ul>
        @foreach($lowestPricedBooks as $book)
            <li>
                <a href="/book/{{ $book->id }}">{{ $book->title }}</a> - {{ $book->price }}
            </li>
        @endforeach
    </ul>
</body>
</html>
