<?php
namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;

class BookController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(BookRequest $bookRequest)
    {
        Book::create($bookRequest->validated());
        return redirect()->route('book.index');
    }

    public function index()
    {
        $books = Book::all();
        return view('index', compact('books'));
    }

    public function show($book)
    {
        $id = Book::find($book);
        return view('show' , ['book' => $id]);
     
    }

    public function edit($id){

        $book = $id;
        return view('update' , ['book' => $book]);

    }
    
    
    public function update(BookRequest $bookRequest , $id){

        $book = Book::find($id);
        $book->update($bookRequest->validated());
        
        return $this->index();
    }


    public function delete($id){

         Book::destroy($id);

         return $this->index();
    }
     
    

}





?>
