<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        $data = [
            'title' => 'Book',
            'books' => $books
        ];
        return view('books.layout', $data);
    }
    public function create(Request $req) {
        $book = new Book;
        $book->title = $req->input('title');
        $book->author = $req->input('author');
        $book->category = $req->input('category');
        $book->save();
        return redirect()->back();
    }
    public function update_form($id) {
        $book = Book::find($id);
        $data = [
            'title' => 'Book',
            'book' => $book
        ];
        return view('books.form', $data);
    }
    public function update($id, Request $req) {
        $book = Book::find($id);
        $book->title = $req->input('title');
        $book->author = $req->input('author');
        $book->category = $req->input('category');
        $book->save();
        return redirect()->route('book');
    }
    public function delete($id) {
        $book = Book::find($id);
        $book->delete();
        return redirect()->back();
    }
}
