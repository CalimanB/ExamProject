<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('admin.book.index', ['books'=>$books]);
    }

    public function create(){
        return view('admin.book.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'author' => 'required',
            'title' => 'required',
            'page_num' => 'required|numeric',
            'year_published' => 'required|numeric',
        ]);

        $newBook = Book::create($data);


        // return redirect()->route('book');

        return redirect(route('book'));
    }

    public function edit(Book $book){
            return view('admin.book.edit', ['book'=> $book]);
    }

    public function update(Book $book, Request $request){
        $data = $request->validate([
            'author' => 'required',
            'title' => 'required',
            'page_num' => 'required|numeric',
            'year_published' => 'required|numeric',
        ]);

        $book->update($data);

        return redirect(route('book'))->with('success', 'Book updated successfully');
    }
}
