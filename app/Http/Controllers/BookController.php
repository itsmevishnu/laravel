<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

// use App\Books;
use App\book;


class BookController extends Controller
{
    function display()
    {
    	// $books = DB::table('books')->get();
    	$books =  book::all();
    	return view('pages.books',compact('books'));
    }

    function show_book(book $book)
    {
    	return view('pages.show_book',compact('book'));
    }
    function addnew()
    {
        return view('pages.add_book');
    }

    function saveBook(Request $request)
    {
      $this->validate($request,[
        'name'=>'required|max:100|unique :books',
        'author'=>'required',
        'isbn' => 'required|unique:books',
        'price' => 'required|integer'
        ]);
       $book = new book;
       $book->name   = $request->name;
       $book->author = $request->author;
       $book->isbn   = $request->isbn;
       $book->price  = $request->price;
       $book->save();
       Session::flash('message','Values Saved successfully');
       return redirect('/book/list');
    }

    public function listBooks()
    {
      // $books = book::all();
      $books = book::paginate(5);
        return view('pages.books',compact('books'));
    }

    public function book_edit(book $book)
    {
      // return $book;
        return view('pages.edit_book',compact('book'));
    }

    public function book_upate(Request $request, book $book)
    {
      $this->validate($request,[
        'name'=>'required',
        'author'=>'required',
        'isbn' => 'required',
        'price' => 'required|integer'
        ]);
       $book->name   = $request->name;
       $book->author = $request->author;
       $book->isbn   = $request->isbn;
       $book->price  = $request->price;
       $book->update();

        Session::flash('message','Values updated successfully');

       return redirect('/book/list');
    }

    public function book_delete(book $book)
    {
      
        return view('pages.delete_book',compact('book'));
    }

    public function book_erase(book $book)
    {
        $book->delete();
        Session::flash('message','Values deleted successfully');
        return redirect('/book/list');
    }

}
