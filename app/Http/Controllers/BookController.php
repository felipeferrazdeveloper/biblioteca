<?php

namespace biblioteca\Http\Controllers;

use biblioteca\Author;
use biblioteca\Category;
use biblioteca\Http\Requests\BookRequest;
use biblioteca\PublishHouse;
use Illuminate\Http\Request;
use biblioteca\Book;

class BookController extends Controller
{
    public function consultCollection(){
        return view('book.consultCollection');
    }

    public function add(){
        $data = ['categories'=>Category::all(), 'authors'=>Author::all(), 'phouses'=>PublishHouse::all()];
        return view('book.add')->with('data', $data);
    }

    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect('/books')->withInput();
    }

    public function list(){
        return view('book.list')->with('books', Book::all());
    }

    public function show($id){
        $book = Book::find($id);
        return view('book.details')->with('book', $book);
    }

    public function remove($id){
        $book = Book::find($id);
        $book->delete();
        return redirect()->action('BookController@list');
    }

    public function create(BookRequest $request){
        Book::create($request->all());
        return redirect('/books')->withInput();
    }
}
