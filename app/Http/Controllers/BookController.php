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
        $books = Book::all();// all data in database shows.
        return view('index', compact('books')); // compact means merge all data's into one array.
        //Like this
        // [
        //     []
        //     []
        //     []
        // ]
    }


    //Expect the parameter is number (unique identifier)
    public function show($book)
    {
        $id = Book::find($book);//find the ID that matches in our database
        return view('show' , ['book' => $id]); // returns view and passes the id matched, the 'book' will be the variable inside blade file " $book = $id (unique)"
     
    }

    public function edit($id){

        $book = $id;
        return view('update' , ['book' => $book]);
        
    }
    
    
    public function update(BookRequest $bookRequest , $id){

        $book = Book::find($id);// find the specific id first
        $book->update($bookRequest->validated());//validate the specific information with that id
        
        return $this->index(); // return to index , which is all data 
    }


    public function delete($id){

         Book::destroy($id);

         return $this->index();
    }
     
    

}





?>
