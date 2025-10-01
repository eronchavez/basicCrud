<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>
<body>

    @foreach($books as $book)

        {{$book->title}} 
        <a href="{{route('book.show' , $book->id)}}"><button>View Details</button></a>
        <a href="{{ route ('book.edit' , $book->id)}}"><button>Update</button></a>
        <a href="{{ route('book.delete' , $book->id)}}"><button>Delete</button></a>
        <br> <br>
    @endforeach
    
</body>
</html>