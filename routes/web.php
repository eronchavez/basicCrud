<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/',function(){
    return view('welcome');
});

// returns view (Form)
Route::get('/books/create' ,[BookController::class , 'create'])->name('create.book');
// proccess the data you passed by  form
Route::post('/books', [BookController::class , 'store'])->name('store.book');
// if validation passes the conditions , it shows all of the data in index.blade
Route::get('/books', [BookController::class, 'index'])->name('book.index');
// show the full information for specific subject
Route::get('/books/{book}',[BookController::class , 'show'])->name('book.show');
// returns update view (form) with specific id
Route::get('/books/{id}/edit',[BookController::class , 'edit'])->name('book.edit');
//process the data passed by  form 
Route::put('/books/{id}' , [BookController::class , 'update'])->name('book.update');
//delete specific id
Route::get('/books/{id}/delete' , [BookController::class , 'delete'])->name('book.delete');

