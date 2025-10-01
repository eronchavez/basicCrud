<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/',function(){
    return view('welcome');
});

// Dito mag iinput 
Route::get('/books/create' ,[BookController::class , 'create'])->name('create.book');
// Dito mapupunta yung ininput mo , tapos vavalidate nadin dito
Route::post('/books', [BookController::class , 'store'])->name('store.book');
// Pag navalidate na , ipapakita na yung na input mo
Route::get('/books', [BookController::class, 'index'])->name('book.index');

Route::get('/books/{book}',[BookController::class , 'show'])->name('book.show');

Route::get('/books/{id}/edit',[BookController::class , 'edit'])->name('book.edit');


Route::put('/books/{id}' , [BookController::class , 'update'])->name('book.update');

Route::get('/books/{id}/delete' , [BookController::class , 'delete'])->name('book.delete');
