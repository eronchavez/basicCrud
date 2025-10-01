<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Details</title>
</head>
<body>
    <h2>{{ $book->title }}</h2>
    <p>Author: {{ $book->author }}</p>
    <p>Published Year: {{ $book->published_year }}</p>

</body>
</html>