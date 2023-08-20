<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        return view('admin.book.index');
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

        return redirect(route('admin.book.index'));
    }
}
