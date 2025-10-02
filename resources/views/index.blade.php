<x-layout>
    
     @foreach($books as $book)

        {{$book->title}} 
        <a href="{{route('book.show' , $book->id)}}"><button>View Details</button></a>
        <a href="{{ route ('book.edit' , $book->id)}}"><button>Update</button></a>
        <a href="{{ route('book.delete' , $book->id)}}"><button>Delete</button></a>
        <br> <br>
    @endforeach
    
</x-layout>