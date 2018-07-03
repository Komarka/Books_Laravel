<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
     public function index() {
       $books=Book::paginate(5);
       return view('index', ['books' => $books]);
     }

    public function show($id) {
      $book=Book::where('id', $id)->first();
      return view('book',['book'=>$book]);
    }

    public function store(Request $request) {
    $book=new Book();
    
    $filename = time().'.'.request()->image->getClientOriginalExtension();
    request()->image->move(public_path('images'), $filename);
    $filename="images/".$filename;
    $book->author= $request->input('author');
    $book->name=$request->input('name');
    $book->pages=(int)$request->input('pages');
    $book->plot=$request->input('plot');
    $book->image=$filename;
    $book->save();
    return redirect()->route('books.index');

    
    


    
    }

    public function destroy($id){
      Book::destroy($id);
      return redirect()->route('books.index');
    }
}
