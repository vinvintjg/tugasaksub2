<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{

    public function getCreatePage() {
        $genres = Genre::all();
        return view('create',['genres'=> $genres]);
    }

    public function createBook(BookRequest $request){

        Book::create([
            'Name' => $request->Name,
            'Quantity' => $request->Quantity,
        ]);

        return redirect(route('getBooks'));
    }


    public function getBooks(){
        $books = Book::paginate(5);
        return view('view', ['books' => $books]);
    }

    public function getBookById($id) {
        $book = Book::find($id);
        return view('update', ['book' => $book]);
    }

}
